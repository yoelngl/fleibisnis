<?php $footer = App\Models\Footer::first(); ?>
<div class="utf_box_widget margin-top-35">
  <h3><i class="sl sl-icon-phone"></i> {{ trans('message.need-help') }}</h3>
  <p>{{ trans('message.need-help-desc') }}</p>
  <ul class="utf_social_icon rounded">
    <li><a class="facebook" href="{{ isset($footer->facebook) ? $footer->facebook : 'javascript:void(0)' }}"><i class="icon-facebook"></i></a></li>
    <li><a class="twitter" href="{{ isset($footer->twitter) ? $footer->twitter : 'javascript:void(0)' }}"><i class="icon-twitter"></i></a></li>
    <li><a class="linkedin" href="{{ isset($footer->linkedin) ? $footer->linkedin : 'javascript:void(0)' }}"><i class="icon-linkedin"></i></a></li>
    <li><a class="instagram" href="{{ isset($footer->instagram) ? $footer->instagram : 'javascript:void(0)' }}"><i class="icon-instagram"></i></a></li>
  </ul>
  <a class="utf_progress_button button fullwidth_block margin-top-5" href="{{ route('contact') }}">{{ trans('message.contact-us') }}</a>
</div>
