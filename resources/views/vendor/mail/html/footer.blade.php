<tr>
    <td>
        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                {{-- <td class="content-cell" align="center">
{{ Illuminate\Mail\Markdown::parse($slot) }}
</td> --}}

                <td style="">


                    <span>
                        <a href="#"><img
                                src="{{ asset('imgs/email-footer/5a22b43e909176.0984090415122238065922.png') }}"
                                alt="{{ env('APP_NAME') }}" style="width:20px; "></a>
                        <a href="#"><img
                                src="{{ asset('imgs/email-footer/5a355496a61e55.7452819615134445026804.png') }}"
                                alt="{{ env('APP_NAME') }}" style="width:20px;"></a>
                        <a href="#"><img
                                src="{{ asset('imgs/email-footer/transparent-social-media-icons-icon-whatsapp-icon-5dd10656a77cf0.019391031573979734686.png') }}"
                                alt="{{ env('APP_NAME') }}" style="width:20px; "></a>
                    </span>
                    <p style="text-align: center">© {{ now()->year }} . All rights reserved <a
                            href="{{ route('home') }}" style="color:black">{{ config('app.name') }}</a>
                    </p>

                </td>

            </tr>
        </table>
    </td>
</tr>
