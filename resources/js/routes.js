import Home from "./pages/Home";
import CreateTrip from "./pages/CreateTrip";
import ToMoscow from "./pages/ToMoscow";
import ToSerpukhov from "./pages/ToSerpukhov";
import About from "./pages/About";

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
