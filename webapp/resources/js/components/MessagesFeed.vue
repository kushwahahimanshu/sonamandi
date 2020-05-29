<template>
    <div class="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :class="`message${message.to_id == contact.id ? ' sent' : ' received'}`" :key="message.id">
                <div class="text">
                    {{ message.text }}
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            contact: {
                type: Object,
                required: true
            },
            messages: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style lang="scss" scoped>
    .feed {
        background-color: rgba(155, 155, 155, 0.1);
        height: 100%;
        max-height: 450px;
        overflow-y: auto;

        ul {
            list-style-type: none;
            padding: 5px;

            li {
                &.message {
                    margin: 10px 0;
                    width: 100%;

                    .text {
                        max-width: 80%;
                        font-size: 11px;
                        border-radius: 5px;
                        padding: 6px 12px;
                        display: inline-block;
                    }

                    &.sent {
                        text-align: right;

                        .text {
                            background-color: #dadada;
                        }
                    }

                    &.received {
                        text-align: left;

                        .text {
                            background-color: #a6d7ff;
                        }
                    }
                }
            }
        }
    }
</style>
