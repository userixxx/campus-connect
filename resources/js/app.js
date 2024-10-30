import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import AppLayout from './App.vue';

const components = {
    CardDetail: () => import('./User/components/CardDetail.vue'),
    Chat: () => import('./User/components/Chat.vue'),
    Header: () => import('./User/components/Header.vue'),
    FlatBigPage: () => import('./User/components/FlatBigPage.vue'),
    FlatCard: () => import('./User/components/FlatCard.vue'),
    HackathonCard: () => import('./User/components/HackathonCard.vue'),
    HackathonPage: () => import('./User/components/HackathonPage.vue'),
    News: () => import('./User/components/News.vue'),
    ScheduleCard: () => import('./User/components/ScheduleCard.vue'),
    SearchSection: () => import('./User/components/SearchSection.vue'),
    TravelCard: () => import('./User/components/TravelCard.vue'),
    UserSections: () => import('./User/components/UserSections.vue'),
    Vacancies: () => import('./User/components/VacanciesCard.vue'),

    FooterNavbar: () => import('./User/components/FooterNavbar.vue'),
    // Добавьте другие компоненты по мере необходимости
};

createInertiaApp({
    resolve: async name => {
        if (components[name]) {
            let page = await components[name]();
            page.default.layout = page.default.layout || AppLayout;
            return page;
        } else {
            throw new Error(`Компонент ${name} не найден в маппинге.`);
        }
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
