@extends ( 'layouts.layout' )

@section ( 'content' )
<!-- FAQ -->
<div class="section-block replicable-content replicable-content">
    <div class="row">
        <div class="column width-12 center">
            <h3 class="post-title">Frequently Asked Questions</h3>
            <p class="lead mb-50">Duis veniam proident tempor anim id fugiat. Aliquip deserunt ipsum cillum aliqua amet et exercitation Lorem. Enim reprehenderit esse est officia labore et laborum non et elit dolore incididunt incididunt.</p>
        </div>
    </div>
    <div class="row">
        <div class="column width-12">
            <div class="accordion line-nav mb-50">
                <ul>
                    <li>
                        <a href="#accordion-1-panel-1">Question 1</a>
                        <div id="accordion-1-panel-1">
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#accordion-1-panel-2">Question 2</a>
                        <div id="accordion-1-panel-2">
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#accordion-1-panel-3">Question 3</a>
                        <div id="accordion-1-panel-3">
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->
@endsection