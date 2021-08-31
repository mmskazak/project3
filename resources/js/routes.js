import Home from "./components/Home";
import CreateTrip from "./components/CreateTrip";
import ToMoscow from "./components/ToMoscow";
import ToSerpukhov from "./components/ToSerpukhov";
import About from "./components/About";

export default [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/to-moscow',
        name: 'to-moscow',
        component: ToMoscow
    },
    {
        path: '/to-serpukhov',
        name: 'to-serpukhov',
        component: ToSerpukhov
    },
    {
        path: '/create-trip',
        name: 'create-trip',
        component: CreateTrip
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },

]
