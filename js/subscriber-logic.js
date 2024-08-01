class SubscriberLogic {
    constructor() {
        this.form = document.getElementById('subscriber-form')
        this.email = document.getElementById('email')

        this.message_info = document.getElementById('message-info')
        this.message = document.getElementById('message-notification')

        this.events()
    }

    events() {
        this.email.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                this.sendFormData();
            }
        });
    }

    sendFormData() {
        const all_data = {
            email: this.email.value
        }
        console.log(all_data);
        try {
            jQuery.ajax({
                type: "post",
                url: `${window.location.origin}/wp-admin/admin-ajax.php`,
                data: {
                    nonce: form_subscriber_data.nonce,
                    action: "subscriber_form_action",
                    ajax_data: all_data
                },
                complete: (response) => {
                    if(response.responseJSON.data === 'User Subscribed') {
                        this.message.innerHTML = response.responseJSON.data

                        this.message_info.classList.add('d-flex');
                        this.message_info.classList.remove('d-none');

                        setTimeout(() => {
                            this.message_info.classList.add('fade-out');
                        }, 1500);

                        setTimeout(() => {
                            this.message_info.classList.remove('d-flex');
                            this.message_info.classList.add('d-none');
                            this.message_info.classList.remove('fade-out');
                        }, 2500);

                    } else {
                        console.log(response.responseJSON.data);
                        this.message.innerHTML = 'Problem sa slanjem poruke';

                        this.message_info.classList.add('d-flex');
                        this.message_info.classList.remove('d-none');

                        setTimeout(() => {
                            this.message_info.classList.add('fade-out');
                        }, 1500);

                        setTimeout(() => {
                            this.message_info.classList.remove('d-flex');
                            this.message_info.classList.add('d-none');
                            this.message_info.classList.remove('fade-out');
                        }, 2500);
                    }
                }
            });
        } catch (error) {
            console.error('Error:', error);
        }
    }
}

const subscriber_logic = new SubscriberLogic();