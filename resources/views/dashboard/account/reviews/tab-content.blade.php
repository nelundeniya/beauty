@include('shared.form_errors')
@include('shared.form_flash')
<div class="content active" id="panel1">
  @include('dashboard.account.reviews._review-list')
</div>
<div class="content" id="panel2">
  @include('dashboard.account.reviews._request-reviews')
</div>
<div class="content" id="panel3">
  @include('dashboard.account.reviews._submit-reviews')
</div>
<div class="content" id="panel4">
  @include('dashboard.account.reviews._reviews-faq')
</div>