<input wire:ignore
    x-data
    x-ref="input"
    x-init="picker = new Pikaday({
                field: $refs.input,
                format: 'D-M-YYYY',
                toString(date, format) {
                    const day = pad(date.getDate());
                    const month = pad(date.getMonth() + 1);
                    const year = date.getFullYear();
                    return `${day}-${month}-${year}`;
                },
                parse(dateString, format) {
                    const parts = dateString.split('-');
                    const day = parseInt(parts[0], 10);
                    const month = parseInt(parts[1], 10) - 1;
                    const year = parseInt(parts[2], 10);
                    return Date(year, month, day);
                }
            })"
    type="text"
    readonly
    onchange="this.dispatchEvent(new InputEvent('input'))"
    {{ $attributes }} />
    @push('modals')
        <script type="text/javascript">function pad(n) { return ( n <10 ? '0'+ n : n); }</script>
    @endpush