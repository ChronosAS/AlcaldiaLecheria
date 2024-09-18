import './bootstrap';
import { Tooltip, initTWE, Collapse, Dropdown,Carousel} from "tw-elements";
import 'flowbite';
import jQuery from 'jquery';
import React from "react"
import ReactDOM from "react-dom/client";
import select2 from 'select2';

import NewsCarousel from './Components/NewsCarousel';

select2(jQuery);

initTWE({ Tooltip, Collapse, Dropdown,Carousel });
window.$ = jQuery

if(document.getElementById('newsCarousel')){
    const posts = document.getElementById('newsCarousel').getAttribute("posts");
    ReactDOM.createRoot(document.getElementById('newsCarousel')).render(
        <NewsCarousel posts={JSON.parse(posts)}/>);
}
