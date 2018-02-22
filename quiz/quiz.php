<div id="quiz" class="quiz">
	<div v-for="(step, index) in quiz.steps" v-show="currentStep == index" class="quiz-step">
		<h2 v-html="quiz.name" class="quiz-step__title"></h2>
		<p v-html="step.text" class="quiz-step__text"></p>
		<div v-show="step.type == 'checkbox'">
			<div v-for="(option, optionIndex) in step.options">
				<div class="pretty p-default p-curve p-thick p-smooth">
					<input type="checkbox"
						   v-model="answers[index][optionIndex]"
						   :value="option"
						   :class="'step-'+index+'-input'"/>
					<div class="state p-danger-o">
						<label>{{option}}</label>
					</div>
				</div>
			</div>
			<div class="pretty p-default p-curve p-thick p-pulse">
				<input type="checkbox"
					   v-if="step.selectAllOption"
					   v-on:click="selectAll(index, $event)"/>
				<div class="state p-danger-o">
					<label>Выбрать всё</label>
				</div>
			</div>
		</div>

		<div v-show="step.type == 'radio'">
			<div v-for="(option, optionIndex) in step.options">
				<div class="pretty p-default p-round p-thick p-smooth">
					<input type="radio"
						   v-model="answers[index]"
						   :value="option"
						   :class="'step-'+index+'-input'"/>
					<div class="state p-danger-o">
						<label>{{option}}</label>
					</div>
				</div>
			</div>
		</div>

		<div v-show="step.type == 'form'">
			<div v-for="(input, name) in step.form">
				<label for="">{{ input.label }}</label>
				<input class="input-text" :type="input.type" v-model="answers[index][name]" value="">
			</div>
		</div>

		<div v-show="step.type == 'leadForm'">
			<form action="/sender/send.php" class="sform">
				<div v-for="(input, name) in step.form">
					<label for="">{{ input.label }}</label>
					<input
							class="input-text"
							:type="input.type"
							:name="name"
							:placeholder="input.placeholder"
							v-bind:class="{'phone-mask': name=='phone'}"
					>
					<input type="hidden" name="note" :value="result">
				</div>
				<input type="submit" class="form-button form-1-btn quiz-step__button" value="Отправить"></input>
			</form>
		</div>

		<button
				type="button"
				v-on:click="nextStep()"
				v-if="currentStep < quiz.steps.length - 1"
				:disabled="checkStep(index) !== true"
				class="form-button form-1-btn quiz-step__button"
		>
			Далее
		</button>
	</div>
	<div class="quiz-step-numbers">
		<span
				v-for="(step, index) in quiz.steps"
				v-bind:class="{'quiz-step-numbers__number_active': index == currentStep, 'quiz-step-numbers__number_done': index < currentStep}"
				class="quiz-step-numbers__number"
		>
			{{ index + 1 }}
		</span>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>
<?php if (false): ?>
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
                }
            ]
        }
	</script>
<?php else: ?>
	<script>
        var quizData = {
            name: 'Просчитай себе комплект шиномонтажного оборудования',
            steps: [
                {
                    name: 'Тип оборудования',
                    text: 'Что необходимо:',
                    type: 'radio',
                    options: [
                        'Шиномонтажный станок',
                        'Балансировочный станок',
                        'Компрессор'
                    ]
                },
                {
                    name: 'Параметры оборудования',
                    text: 'Что необходимо:',
                    type: 'radio',
                    dependsOnStep: 0,
                    options: [],
                    optionsVars: {
                        'Шиномонтажный станок': [
                            'автомат',
                            'полуавтомат',
                            'затрудняюсь ответить'
                        ],
                        'Балансировочный станок': [
                            'автомат',
                            'полуавтомат',
                            'ручной ввод'
                        ],
                        'Компрессор': [
                            '100 литров',
                            '250 литров',
                            'более 300 литров'
                        ],
                    }
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
                }
            ]
        }
	</script>

<?php endif; ?>
