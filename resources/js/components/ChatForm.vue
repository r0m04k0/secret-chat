
<template>
    <div class="input-group fixed-bottom">
        <textarea name="message" id="btn-input" rows="3" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage"></textarea>
        <span class="input-group-btn d-flex justify-content-center">
            <button class="btn btn-primary" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {

                if (this.newMessage != '') {
                    
                    this.$emit('messagesent', {
                        user: this.user,
                        message: this.newMessage
                    });
                    this.newMessage = ''
                }

                window.scrollTo(0, document.body.scrollHeight || document.documentElement.scrollHeight);

            }
        }    
    }
    
</script>
