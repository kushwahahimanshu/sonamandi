<template>
    <div class="composer">
        <textarea v-model="message" @keydown.enter="send" placeholder="Start typing here..."></textarea>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: ''
            }
        },
        methods: {
            send(e) {
                e.preventDefault();
                
                if(this.message == '') {
                    return;
                }

                this.$emit('send', this.message);
                this.message = '';
            }
        }
    }
</script>

<style lang="scss" scoped>
    .composer {
        padding: 10px;

        textarea {
            width: 100%;
            resize: none;
            border-radius: 3px;
            border: 1px solid rgba(0,0,0,0.1);
            padding: 6px;
        }
    }
</style>
