

{{ if posts }}

	{{ posts }}
    
        <article class="blog-post">

                <div class="row-fluid">
                    <div class="blog-meta-2">

                        <div class="date">{{ helper:date format="d" timestamp=created_on }}<br><span>{{ helper:date format="M" timestamp=created_on }}</span></div>


                        <div class="details">
                            <h3><a href="{{url}}">{{ title }}</a></h3>
                            <div>
                                <ul class="clearfix">
                                    
                                    <li>
                                        <p><b>{{ helper:lang line="blog:written_by_label" }}:</b><a href="user/view/{{author_id}}"> {{ user:display_name user_id=author_id }}</a>,</p>
                                    </li>
                                    <li>
                                        <b>Comments:</b><a href="{{url}}#comments"> {{ comment_count }}</a>,
                                    </li>
                                    {{ if keywords }}
                                    <li>
                                        <b>{{ helper:lang line="blog:tagged_label" }}</b>
                                        {{ keywords }}
                                            <span><a href="blog/tagged/{{ keyword }}">{{ keyword }}</a></span>
                                        {{ /keywords }}
                                    </li>
                                    {{ endif }}
                                </ul>

                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="blog-intro ">


                        <div class="blog-introduction vmargin">
                            {{image:img}}
                            
                            
                            
                           {{ preview }}
                        </div>
                        <div class=""><a href="{{ url }}" class="btn">{{ helper:lang line="blog:read_more_label" }}</a></div>
                    </div>
                </div>


            </article>    
            <div class="divider thick"></div>
            {{ /posts }}
    
	{{ pagination }}

{{ else }}
	
	{{ helper:lang line="blog:currently_no_posts" }}

{{ endif }}