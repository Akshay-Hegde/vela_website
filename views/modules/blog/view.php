{{ post }}
<article class="blog-post vmargin">
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
                                        <b>Comments:</b><a href="{{url}}#comments">{{if ({comments:count entry_id=id entry_key="blog:posts"})}}{{comments:count entry_id=id entry_key="blog:posts"}}{{else}}0{{endif}}</a>,
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


            <div class="blog-introduction">
                {{image:img}}
                {{ body }}
            </div>
        </div>
    </div>
</article>
{{/post}}
<?php
if (Settings::get('enable_comments')){
    echo $this->comments->display() ;
    if ($form_display){echo $this->comments->form();}		
    else{echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled']))));}  
}
 ?>
    
