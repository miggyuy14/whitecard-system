<template>
    <div>
        <div class="container">
        <h1 class="d-flex justify-content-center pt-3 pb-2">List of Whitecards</h1>
        
        <div class="card card-body mb-2 d-flex justify-content-center">

            <button class="btn btn-success">Create new entry</button>

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
                <td>{{ whitecard.professors_name }}</td>
                <td>
                    <button class="btn btn-secondary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tbody>

            </table>
                
           </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            whitecards:[],
            whitecard:{
                id: '',
                subject: '',
                first_name: '',
                last_name: '',
                status: '',
                created_at: '',
                professors_name: '',


            }
               
        }
    },
    created() {
            this.fetchWhiteCard();
        },

    methods: {
        fetchWhiteCard(){
            fetch('api/user')
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.whitecards = res.data;
                })
        }
    },
}
</script>