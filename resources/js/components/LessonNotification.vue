<tamplate>
    <li class="nav-item dropdown">
        <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-globe"></i>Notification <span class="badge badge-danger" id="count-notification">
            {{ lessons.length }}
        </span><span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="" class="dropdown-item" v-on:click="MarkAsRead(lesson)" v-for="lesson in lessons">
                {{ lesson.data['lesson']['title'] }} {{ lesson.data.created_at }}
            </a>
            <!-- <div class="dropdown-divider" v-if="lessons.length"></div> -->
            <a href="#" class="dropdown-item" v-if="lessons.length==0">
                No Notification
            </a>
        </div>
    </li>

</tamplate>
<script>
    export default{
        props: ['lessons'],
        methods : {
            MarkAsRead: function (lesson) {
                var data = {
                    not_id : lesson.id,
                    lesson_id: lesson.data.lesson.id,
                };
                axios.post("/markAsRead",data).then(response => {
                    window.location.href="/readLesson/" + data.lesson_id;
                });
            },
        }
    };
</script>
