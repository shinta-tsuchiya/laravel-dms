<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <i class="fas fa-user-circle fa-3x mr-1"></i>{{-- アイコン --}}
    <div>
      <div class="font-weight-bold">{{ $document->user->name }}</div> {{-- ユーザー名を表示 --}}
      <div class="font-weight-lighter">{{ $document->updated_at->format('Y/m/d H:i') }}</div>{{-- 更新時間を表示 --}}
    </div>
  </div>
  <div class="card-body pt-0">
    <h3 class="h4 card-title">
      <a class="text-dark" href="{{ route('documents.show', ['document' => $document]) }}">
        {{ $document->title }}
      </a>
    </h3>
    <div class="card-text">
      {{ $document->body }}
    </div>
  </div>
</div>