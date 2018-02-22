<div id="quiz">
    <div v-for="(step, index) in quiz.steps" v-if="currentStep == index">
        <h2 v-html="quiz.name"></h2>
        <p v-html="step.text"></p>
        <div v-if="step.type == 'checkbox'">
            <div v-for="(option, optionIndex) in step.options">
                <input
                        type="checkbox"
                        v-model="answers[index][optionIndex]"
                        :value="option"
                        :class="'step-'+index+'-input'"
                >
                <label for="">{{option}}</label>
            </div>
            <input
                    type="checkbox"
                    v-if="step.selectAllOption"
                    v-on:click="selectAll(index, $event)"
            >
            <label for="">Выбрать всё</label>

        </div>

        <div v-if="step.type == 'radio'">
            <div v-for="(option, optionIndex) in step.options">
                <input type="radio" v-model="answers[index]" :value="option">
                <label for="">{{option}}</label>
            </div>
        </div>

        <div v-if="step.type == 'form'">
            <div v-for="(input, name) in step.form">
                <label for="">{{ input.label }}</label>
                <input :type="input.type" v-model="answers[index][name]" value="">
            </div>
        </div>

        <button
                type="button"
                v-on:click="nextStep()"
                v-if="currentStep < quiz.steps.length - 1"
                :disabled="checkStep(index) !== true"
        >
            Далее
        </button>
    </div>
    <pre>
        {{ result }}
    </pre>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
<script>
    var quizData = {
        name: 'Просчитай себе комплект шиномонтажного оборудования',
        steps: [
            {
                name: 'Тип оборудования',
                text: 'Что интересует:',
                type: 'checkbox',
                options: [
                    'Шиномонтажный станок',
                    'Балансировочный станок',
                    'Компрессор',
                    'Домкрат',
                    'Гайковёрт',
                    'Комплект расходников',
                    'Подъёмник для автосервиса',
                    'Комплект подключения'
                ],
                selectAllOption: true
            },
            {
                name: 'Страна производитель',
                text: 'Страна производитель оборудования',
                type: 'radio',
                options: [
                    'Россия',
                    'Италия',
                    'Китай',
                    'Германия',
                    'США',
                    'Германия+Китай'
                ]
            },
            {
                name: 'Город',
                type: 'form',
                form: {
                    city: {
                        type: 'text',
                        placeholder: 'Город',
                        label: 'Город',
                        required: true
                    }
                }
            },
            {
                name: 'Финальная форма',
                title: 'Спасибо за ответы!',
                text: 'Мы подготовили для Вас 2 варианта <br/> комплекта шиномонтажного оборудования',
                type: 'leadForm',
                form: {
                    name: {
                        type: 'text',
                        placeholder: 'Имя'
                    },
                    email: {
                        type: 'text',
                        placeholder: 'Почта'
                    },
                    phone: {
                        type: 'text',
                        placeholder: 'Телефон'
                    }
                }
            },
            {
                title: 'Спасибо за Ваш ответ!',
                text: 'В ближайшее время с Вами <br/> свяжется наш менеджер'
            }
        ]
    }
</script>
