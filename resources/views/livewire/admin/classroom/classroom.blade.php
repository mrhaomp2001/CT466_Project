<div>
    @forelse ($questions as $question)
        <livewire:admin.classroom.question :question="$question" :wire:key="$question->id" />
    @empty
        <p class="text-light">
            Lớp chưa có câu hỏi nào, hãy tạo các câu hỏi.
        </p>
    @endforelse

    {{ $questions->links() }}
</div>
