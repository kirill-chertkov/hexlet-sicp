<ul class="nav nav-tabs nav-fill rounded border-bottom-0 x-bg-gray-200 p-2 mb-4">
    <li class="nav-item mb-0">
        <a href="{{ route('exercises.index') }}" @class(['nav-link', 'rounded', 'border-0', 'active' => isActiveRoute('exercises.index')]) >
            {{ __('layout.nav.exercises') }}
        </a>
    </li>
    <li class="nav-item mb-0">
        <a @class(['nav-link', 'rounded', 'border-0', 'active' => isActiveRoute('solutions.index')]) href="{{ route('solutions.index') }}">
            {{ __('views.solution.index.header.h1') }}
        </a>
    </li>
</ul>
