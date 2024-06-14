import './bootstrap';
import { Tooltip, initTWE, Collapse, Dropdown,Carousel} from "tw-elements";
import 'flowbite';

import React from "react"
import ReactDOM from "react-dom/client";

import NewsCarousel from './Components/NewsCarousel';

initTWE({ Tooltip, Collapse, Dropdown,Carousel });


if(document.getElementById('newsCarousel')){
    const posts = document.getElementById('newsCarousel').getAttribute("posts");
    ReactDOM.createRoot(document.getElementById('newsCarousel')).render(
        <NewsCarousel posts={JSON.parse(posts)}/>);
}
