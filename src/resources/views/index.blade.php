@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<div class="attendance__content">
  <div class="attendance__panel">
    <form class="attendance__button">
      <button class="attendance__button-submit" type="submit">勤務開始</button>
    </form>
    <form class="attendance__button">
      <button class="attendance__button-submit" type="submit">勤務終了</button>
    </form>
    <form class="attendance__button">
      <button class="attendance__button-submit" type="submit">休憩開始</button>
    </form>
    <form class="attendance__button">
      <button class="attendance__button-submit" type="submit">休憩終了</button>
    </form>
  </div>
  <div class="attendance-table">
    <table class="attendance-table__inner">
      <tr class="attendance-table__row">
        <th class="attendance-table__header">名前</th>
        <th class="attendance-table__header">開始時間</th>
        <th class="attendance-table__header">終了時間</th>
        <th class="attendance-table__header">休憩時間</th>
        <th class="attendance-table__header">勤務時間</th>
      </tr>
      <tr class="attendance-table__row">
        <td class="attendance-table__item">サンプル太郎</td>
        <td class="attendance-table__item">開始時間数値</td>
        <td class="attendance-table__item">終了時間数値</td>
        <td class="attendance-table__item">休憩時間数値</td>
        <td class="attendance-table__item">勤務時間数値</td>
      </tr>
    </table>
  </div>
</div>
@endsection
{{-- コメント --}}