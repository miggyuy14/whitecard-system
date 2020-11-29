<template>
    <div>
        <div class="container">
        <h1 class="d-flex justify-content-center pt-3 pb-2">List of Whitecards</h1>
        
        <div class="card card-body mb-2 d-flex justify-content-center">

          <b-button v-b-modal.my-modal class="btn btn-success" >Add Entry</b-button>

            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <th>ID</th>
                <th>Subject</th>
                <th>Name</th>
                <th>Status</th>
                <th>Date Created</th>
                <th>Assigned To</th>
                <th>Actions</th>
            </thead>
            <tbody v-for="whitecard in whitecards" v-bind:key="whitecard.id">
                <td>{{ whitecard.id }}</td>
                <td>{{ whitecard.subject_name }}</td>
                <td>{{ whitecard.first_name }} {{ whitecard.middle_initial }} {{ whitecard.last_name }}</td>
                <td>{{ whitecard.status }}</td>
                <td>{{ whitecard.created_at }}</td>
                <td>
                    <button class="btn btn-secondary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tbody>

            </table>
                
           </div>
        </div>
        <b-modal id="my-modal">
            <form @submit.prevent="AddWhiteCard" >
            <div class="card card-body">
                <H2>New Whitecard</H2>
                
                    <label for="first_name">First Name</label>
                    <input type="text" v-model="whitecard.first_name" placeholder="first name">
                    <label for="last_name">Last Name</label>
                    <input type="text" v-model="whitecard.last_name" placeholder="last name">
                    <label for="middle_initial">Middle Initial</label>
                    <input type="text" v-model="whitecard.middle_initial" placeholder="middle initial">
                    <label for="subject_name">Subject Code</label>
                    <input type="text" v-model="whitecard.subject_name" placeholder="subject code">
                    <label for="middle_initial">Semester</label>
                    <input type="text" v-model="whitecard.semester" placeholder="semester">
                    <label for="middle_initial">College Branch</label>
                    <input type="text" v-model="whitecard.college_branch" placeholder="college branch">
                

            </div>
            <div class="d-flex justify-content-end pt-3">
            <button class="btn btn-success" type="submit">Finish</button>
            </div>
            </form>
        </b-modal>
    </div>
</template>

<script>
import { BButton, BModal, VBModal } from "bootstrap-vue";
export default {

    components: {
            BButton,
            BModal
        },

    directives: { 
        'b-modal': VBModal 
    },

    data(){
        return {
            whitecards:[],
            whitecard:{
                id: '',
                subject: '',
                first_name: '',
                last_name: '',
                middle_initial: '',
                status: '',
                created_at: '',
                professors_name: '',
            professors:[],
            professor:{
                first_name: '',
                id:''
            }
            },
            whitecard_id:'',
               
        }
    },
    created() {
            this.fetchWhiteCard();
            this.fetchProfessors();
        },

    methods: {
        fetchWhiteCard(){
            fetch('api/whitecard')
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.whitecards = res.data;
                })
        },
        fetchProfessors(){
        fetch('api/professors')
        .then(res => res.json())
        .then(res => {
            console.log(res.data);
            this.professors = res.data;
        })
    },
        AddWhiteCard(){
             fetch('api/addWhitecard', {
                        method: 'post',
                        body: JSON.stringify(this.whitecard),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.whitecard.first_name = '';
                        this.whitecard.last_name = '';
                        this.whitecard.middle_initial = '';
                        this.whitecard.subject_name = '';
                        this.whitecard.semseter = '';
                        this.whitecard.college_branch = '';
                        
                        alert('Whitecard Added');
                        this.fetchWhiteCard()
                    })
                    .catch(err => console.log(err));
        }
    },
    
}
</script>