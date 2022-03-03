<div class="row r-faq-accordion-wrapper">
    @foreach($faqs as $faq)
    <div class="col-lg-6 col-md-12">
        <div class="r-accordion">
            <div class="r-accordion-heading">
                {{ $faq['title'] }}
            </div>
            <div class="r-accordion-body" style="{{ $loop->index == 0 ? "display: block;" : "" }}">
                <p>
                    {{ $faq['description'] }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
