@extends ( 'layouts.layout' )

@section ( 'content' )
<!-- About Section -->
<div class="section-block replicable-content">
    <div class="row">
        <div class="column width-8 offset-2 center">
            <h3>About Us</h3>
            <p class="lead mb-50">Pariatur deserunt qui minim cillum consectetur deserunt cillum consequat magna est sunt adipisicing tempor. Irure ad adipisicing nisi fugiat consectetur cupidatat.</p>
        </div>
    </div>
    <div class="row">
        <div class="column width-12">
            <div class="row flex boxes content-grid-2">
                <div class="grid-item center">
                    <div class="box rounded medium mb-0 border-grey-light">
                        <div class="thumbnail circle border-grey-light thick">
                            <img src="images/team/team-member-1-square.jpg" width="150" height="150" alt=""/>
                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-10">John Doe</h4>
                            <h6 class="occupation">Title</h6>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item center">
                    <div class="box rounded medium mb-0 border-grey-light">
                        <div class="thumbnail circle border-grey-light thick">
                            <img src="images/team/team-member-2-square.jpg" width="150" height="150" alt=""/>
                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-10">Mary Sue</h4>
                            <h6 class="occupation">Title</h6>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
@endsection