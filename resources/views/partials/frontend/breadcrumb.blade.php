<nav aria-label="breadcrumb">
    <ol class="breadcrumb text-[#bcbcbd] flex space-x-2">
        <?php $segments = ''; ?>
        <li class="breadcrumb-item ">
            <a class="mr-2" href="{{ route('home') }}">Home</a>
            <i class="fa-solid fa-greater-than"></i>
        </li>

        @foreach ( request()->segments() as $segment)
            <?php $segments .= '/'.$segment; ?>

            <li class="breadcrumb-item text-[#bcbcbd] active">
                <a href="{{ $segments }}"> {{ ucwords( str_replace('-', ' ', $segment)) }}</a>
            </li>
        @endforeach
    </ol>
</nav>
