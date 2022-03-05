<template>
    <div class="py-10">
        <table>

            <thead>
                <th>Title</th>
                <th>Episode ID</th>
                <th>Opening Crawl</th>
                <th>Director</th>
                <th>Producer</th>
                <th>URL</th>
                <th>Release date</th>
                <th>Created</th>
            </thead>

            <tbody>
                <tr v-for="(film,index) in films_arr" :key="index">
                    <td>{{ film.title }}</td>
                    <td>{{ film.episode_id }}</td>
                    <td>{{ film.opening_crawl.substring(0, 20) }}...</td>
                    <td>{{ film.director }}</td>
                    <td>{{ film.producer }}</td>
                    <td style="width: 20%">{{ film.url }}</td>
                    <td>{{ film.release_date }}</td>
                    <td>{{ film.created }}</td>
                </tr>
            </tbody>

        </table>
    </div>
</template>

<script>

    export default {
        props: ['films'],

        data() {
            return {
                films_arr: []
            }
        },

        created() {
            this.films_arr = JSON.parse(this.films);
        },

        mounted() {
            this.formatDateFieldsInFilmsArray();
        },

        methods: {
            formatDateFieldsInFilmsArray() {
                this.films_arr.forEach((el, i) => {
                    let created_date_arr = el.created.split('T')[0].split('-');
                    let release_date_arr = el.release_date.split('T')[0].split('-');

                    el.created = created_date_arr.reverse().join('/');
                    el.release_date = release_date_arr.reverse().join('/');
                });
            }
        }
    }

</script>

<style scoped>

    table {
        table-layout: auto;
        width: 100%;
        border-top: 2px solid rgb(153, 205, 247);
    }

    thead {
        text-align: left;
    }

    tr:nth-child(odd) {
        background-color: rgb(238, 246, 253);
    }

    td, th {
        padding: .5rem .2rem;
    }

</style>