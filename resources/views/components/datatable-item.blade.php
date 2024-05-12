<span class="text-capitalize">{{ $name }}</span>
@if ($sortColumn !== $name)
    <span class="fa-solid fa-chevron-up fa-sm icon text-secondary ms-1"></span>
    <span class="fa-solid fa-chevron-down fa-sm icon text-secondary"></span>
@elseif ($sortDirection === 'ASC')
    <span class="fa-solid fa-chevron-up fa-sm icon text-secondary ms-1"></span>
@else
    <span class="fa-solid fa-chevron-down fa-sm icon text-secondary ms-1"></span>
@endif
