require('./bootstrap')

import { createApp } from 'vue'
import ExampleComponent from './components/ExampleComponent'
import ReportsComponent from './components/admin/reports/MainComponent'

const app = createApp({})

app.component('example-component', ExampleComponent)
app.component('reports-component', ReportsComponent)

app.mount('#app')
