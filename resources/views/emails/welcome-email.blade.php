@component('mail::message')
# ようこそ、ドラゴンワールドへ。

ドラゴンボールの世界を覗けるよ

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
