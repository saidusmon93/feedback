<template>
    <div class="container">
        <div class="feedback__title">
            <h1 class="fw-bolder text-white">Обратная связь</h1>
            <p class="fs-3 fw-bolder text-white">
                Оставьте свои данные и мы сами с Вами свяжемся
            </p>
        </div>
        <form @submit.prevent="submitForm" class="row">
            <div class="col-md-4">
                <input
                    type="text"
                    placeholder="Ваше имя:"
                    class="form-control form-control-lg form-control-sm mb-4 height_inp"
                    v-model.trim="name"
                />
                <input
                    type="number"
                    placeholder="Телефон:"
                    class="form-control form-control-lg form-control-sm height_inp"
                    v-model.trim.trim="phone"
                />
            </div>
            <div class="col-md-7">
                <textarea
                    v-model="message"
                    placeholder="Ваш вопрос:"
                    class="form-control form-control-lg form-control-sm h-100"
                ></textarea>
            </div>
            <div class="mt-4 col-md-4">
                <input
                    type="submit"
                    placeholder="Отправить"
                    class="btn bg-warning form-control form-control-lg form-control-sm fw-bolder height_inp"
                />
            </div>
        </form>
        <p class="mt-4 fs-6 text-white">
            Нажимая на кнопку "Отправить", я даю свое согласие на обработку
            персональных данных и принимаю
            <a href="" class="text-muted">условия соглашения</a>
        </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "",
            phone: "",
            message: "",
        };
    },
    methods: {
        submitForm() {
            if (this.name && this.phone && this.message) {
                axios
                    .post("api/feedback", {
                        name: this.name,
                        phone: this.phone,
                        message: this.message,
                    })
                    .then((response) => {
                        console.log(response.data);
                        (this.name = ""),
                            (this.phone = ""),
                            (this.message = "");
                    })
                    .catch((error) => {
                        console.log(error.response.data.errors);
                    });
            }
        },
    },
};
</script>
<style lang="scss" scoped>
.height_inp {
    height: 68px;
}
</style>
