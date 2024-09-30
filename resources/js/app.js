require('./bootstrap');

import { createApp } from 'vue'

import Header from './vue/header.vue'
import Footer from './vue/footer.vue'
import About from './vue/about.vue'
import Contact from './vue/contact.vue'
import Facts from './vue/facts.vue'
import Portfolio from './vue/portfolio.vue'
import Resume from './vue/resume.vue'
import Services from './vue/services.vue'
import Skills from './vue/skills.vue'
import Testimonials from './vue/testimonials.vue'

const header = createApp(Header)

header.mount('#header_section')

const footer = createApp(Footer)

footer.mount('#footer_section')

const about = createApp(About)

about.mount('#about_section')

const contact = createApp(Contact)

contact.mount('#contact_section')

const facts = createApp(Facts)

facts.mount('#facts_section')

const portfolio = createApp(Portfolio)

portfolio.mount('#portfolio_section')

const resume = createApp(Resume)

resume.mount('#resume_section')

const services = createApp(Services)

services.mount('#services_section')

const skills = createApp(Skills)

skills.mount('#skills_section')

const testimonials = createApp(Testimonials)

testimonials.mount('#testimonials_section')