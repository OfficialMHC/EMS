<template>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Edit Employee</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> Employee Management</a></li>
                <li class="active">Employee</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <h3 class="box-title"><i class="fa fa-pencil"></i> Edit Employee</h3>
                                </div>
                                <div class="col-xs-12 col-sm-6 text-right">
                                    <router-link :to="{name: 'EmployeesIndex'}"><i class="fa fa-long-arrow-left"></i> Back to list</router-link>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form @submit.prevent="updateEmployee()" class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input v-model="form.first_name" id="first_name" type="text" class="form-control" name="first_name" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="middle_name" class="col-sm-2 control-label">Middle Name</label>
                                    <div class="col-sm-10">
                                        <input v-model="form.middle_name" id="middle_name" type="text" class="form-control" name="middle_name" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input v-model="form.last_name" id="last_name" type="text" class="form-control" name="last_name" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="department_id" class="col-sm-2 control-label">Department</label>
                                    <div class="col-sm-10">
                                        <select v-model="form.department_id" @change="getDepartments()" name="department_id" id="department_id" class="form-control" style="width: 100%" required>
                                            <option value="" selected disabled>--- Select Department ---</option>
                                            <option v-for="department in departments" :key="department.id" :value="department.id">{{ department.department_name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea v-model="form.address" name="address" id="address" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country_id" class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10">
                                        <select v-model="form.country_id" @change="getStates()" name="country_id" id="country_id" class="form-control" style="width: 100%">
                                            <option value="" selected disabled>--- Select Country ---</option>
                                            <option v-for="country in countries" :key="country.id" :value="country.id">{{ country.country_name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state_id" class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-10">
                                        <select v-model="form.state_id" @change="getCities()" name="state_id" id="state_id" class="form-control" style="width: 100%">
                                            <option value="" selected disabled>--- Select State ---</option>
                                            <option v-for="state in states" :key="state.id" :value="state.id">{{ state.state_name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city_id" class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10">
                                        <select v-model="form.city_id" name="city_id" id="city_id" class="form-control" style="width: 100%">
                                            <option value="" selected disabled>--- Select City ---</option>
                                            <option v-for="city in cities" :key="city.id" :value="city.id">{{ city.city_name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="zip_code" class="col-sm-2 control-label">ZIP Code</label>
                                    <div class="col-sm-10">
                                        <input v-model="form.zip_code" id="zip_code" type="text" class="form-control" name="zip_code" value="" required autocomplete="zip_code" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
                                    <div class="col-sm-10">
                                        <datepicker v-model="form.date_of_birth" input-class="form-control" name="date_of_birth" id="date_of_birth"></datepicker>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date_hired" class="col-sm-2 control-label">Date Hired</label>
                                    <div class="col-sm-10">
                                        <datepicker v-model="form.date_hired" input-class="form-control" name="date_hired" id="date_hired"></datepicker>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Datepicker from 'vuejs-datepicker';
import moment from 'moment';
export default {
    components: {
        Datepicker
    },
    data() {
        return {
            departments: [],
            countries: [],
            states: [],
            cities: [],
            form: {
                first_name: '',
                middle_name: '',
                last_name: '',
                department_id: '',
                address: '',
                country_id: '',
                state_id: '',
                city_id: '',
                zip_code: '',
                date_of_birth: '',
                date_hired: '',
            }
        }
    },
    created() {
        this.getEmployee();
        this.getCountries();
        this.getDepartments();
    },
    methods: {
        getEmployee() {
            axios.get('/api/employees/' + this.$route.params.id)
                .then(res => {
                    this.form = res.data.data;
                    this.getStates();
                    this.getCities();
                }).catch(error => {
                console.log(console.error)
            })
        },
        getDepartments() {
            axios.get('/api/employees/departments')
                .then(res => {
                    this.departments = res.data
                }).catch(error => {
                console.log(console.error)
            })
        },
        getCountries() {
            axios.get('/api/employees/countries')
                .then(res => {
                    this.countries = res.data
                }).catch(error => {
                console.log(console.error)
            })
        },
        getStates() {
            axios.get('/api/employees/'+this.form.country_id+'/states')
                .then(res => {
                    this.states = res.data
                }).catch(error => {
                console.log(console.error)
            })
        },
        getCities() {
            axios.get('/api/employees/'+this.form.state_id+'/cities')
                .then(res => {
                    this.cities = res.data
                }).catch(error => {
                console.log(console.error)
            })
        },
        updateEmployee() {
            axios.put('/api/employees/'+this.$route.params.id, {
                'first_name': this.form.first_name,
                'middle_name': this.form.middle_name,
                'last_name': this.form.last_name,
                'address': this.form.address,
                'department_id': this.form.department_id,
                'country_id': this.form.country_id,
                'state_id': this.form.state_id,
                'city_id': this.form.city_id,
                'zip_code': this.form.zip_code,
                'date_of_birth': this.format_date(this.form.date_of_birth),
                'date_hired': this.format_date(this.form.date_hired),
            }).then(res => {
                this.$router.push({name: 'EmployeesIndex'});
            })
        },
        format_date(value) {
            if (value) {
                return moment(String(value)).format('YYYYMMDD')
            }
        }
    },
}
</script>

<style>

</style>


