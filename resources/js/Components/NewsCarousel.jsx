
import React from "react"
import { Carousel } from "flowbite-react";

export default function NewsCarousel(props){

    let posts = props.posts.map(function (post) {
        return <img class="object-contain" key={post.id} src={post.image} alt={post.alt} />
    })

    return(
    <div className="h-96 w-full">
        <Carousel pauseOnHover>
            {posts}
        </Carousel>
    </div>
    )
}
