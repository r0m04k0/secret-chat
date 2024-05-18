
<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
<<<<<<< HEAD
                    <span class="badge badge-light text-muted">
=======
                    <span class="badge badge-light">
>>>>>>> 9319adea673dc353275895de4d2178561032a1a5
                        {{ message.created_at }}
                    </span>
                </div>
                <p style="white-space: pre-line;">
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
  export default {
    props: ['messages'],
  };

</script>
