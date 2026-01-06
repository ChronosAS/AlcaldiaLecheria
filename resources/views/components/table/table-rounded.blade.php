<div class="relative overflow-x-auto sm:overflow-x-hidden shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-400">
        <thead {{ $attributes->merge(['class'=>'text-xs  uppercase bg-gray-700 text-gray-400']) }}>
            {{ $thead }}
        </thead>
        <tbody {{ $attributes }}>
            {{ $tbody }}
            {{-- <tr class="border-b bg-gray-800 border-gray-700">
            </tr> --}}
        </tbody>
        {{-- <tfoot>
            {{ $tfoot }}
            {{-- <tr class="font-semibold text-white">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3">3</td>
                <td class="px-6 py-3">21,000</td>
            </tr>
        </tfoot> --}}
    </table>
</div>
