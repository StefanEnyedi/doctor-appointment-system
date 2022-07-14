<template>
    <div>
        <div class="card">
            <div class="card-header subttitle">Programeaza-te</div>
            <div class="card-body">
                <datepicker class="my-datepicker" calendar-class="my-datepicker_calendar"  :disabledDates="disabledDates" :format="customDate" v-model="time" :language="ro"  :inline=true></datepicker>
            </div>
        </div>

        <div class="card">
            <div class="card-header subttitle">Personal medical</div>
            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Fotografie</th>
                        <th>Nume</th>
                        <th>Specializare</th>
                        <th>Programare</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(d, index) in doctors">
                            <td scope="row">{{index+1}}</td>
                            <td>
                                <img :src="'/img/'+ d.doctor.image" width="80">
                            </td>
                            <td>{{d.doctor.name}}</td>
                            <td>{{d.doctor.department}}</td>
                            <td>
                                <a :href="'/new-appointment/'+ d.user_id+ '/'+d.date"><button class="btn btn-success" style="white-space: nowrap; line-height: 1;">Programeaza-te</button></a>
                            </td>
                        </tr>
                        <td v-if="doctors.length==0">Personal medical indisponibil pentru aceasta data.</td>
                    </tbody>
                    
                </table>
                <div class="text-center">
                <pulse-loader :loading="loading" :color="color" :size="size"></pulse-loader>
                </div>
            </div>
        </div>



    </div>
</template>
<script type="text/javascript">
    import {en, ro} from 'vuejs-datepicker/dist/locale'
    import datepicker from 'vuejs-datepicker';
    import moment from 'moment';
    import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
    export default{
        data(){
            return{
                ro: ro,
                size: "15px",
                color: "#0D6EFD",
                time:'',
                doctors:[],
                loading:false,
                disabledDates:{
                    to:new Date(Date.now() - 86400000)
                }
            }
        },
        components:{
            datepicker,
            PulseLoader
        },
        methods:{
            customDate(date){
                this.loading=true
                this.time = moment(date).format('YYYY-MM-DD');
                axios.post('/api/finddoctors', {date:this.time}).then((response)=>{
                    setTimeout(()=>{
                        this.doctors = response.data
                        this.loading=false
                    }, 1000)
                    
                }).catch((error)=>{alert('error')})
            }
        },
        mounted(){
            this.loading=true
            axios.get('/api/doctors/today').then((response)=>{
                this.doctors = response.data
                this.loading=false
            })
        }
    }
</script>
<style scoped>
    .my-datepicker >>> .my-datepicker_calendar{
        width: 100%;
        height: 330px;
    }
    .subttitle{
        color: #0D6EFD;
        font-size: 15px;
        font-weight: 700;
        
    }
</style>
