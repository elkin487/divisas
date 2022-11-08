<?php

namespace App\Http\Helpers;

use Exception;
use Illuminate\Support\Facades\Http;

class ApiConversion
{
    public static function conversion($amount, $to, $from)
    {
        try {
            $url = 'https://api.fastforex.io/convert';
            $params = [
                'api_key' => '70d2e8be59-ded2069958-rksu8h',
                'amount'  => $amount,
                'to'      => $to,
                'from'    => $from,
            ];
            $request = Http::get($url, $params);
            $response = $request->json();
            return $response['result'][$to];
        } catch (Exception $th) {
            dd($th->getMessage());
        }
    }

    public static function codDivisas()
    {
        return
            [
                [

                    "NAME" => "Afgani afgano",
                    "COD"  => "AFN"
                ],
                [
                    "NAME" => "Lek",
                    "COD"  => "ALL"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dinar argelino",
                    "COD"  => "DZD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Kwanza angoleño",
                    "COD"  => "AOA"
                ],
                [
                    "NAME" => "Dólar del Caribe Oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Dólar del Caribe Oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Riyal saudí",
                    "COD"  => "SAR"
                ],
                [
                    "NAME" => "Peso argentino",
                    "COD"  => "ARS"
                ],
                [
                    "NAME" => "Dram armenio",
                    "COD"  => "AMD"
                ],
                [
                    "NAME" => "Florín arubeño",
                    "COD"  => "AWG"
                ],
                [
                    "NAME" => "Dólar australiano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Manat azerbaiyano",
                    "COD"  => "AZN"
                ],
                [
                    "NAME" => "Dólar bahameño",
                    "COD"  => "BSD"
                ],
                [
                    "NAME" => "Taka",
                    "COD"  => "BDT"
                ],
                [
                    "NAME" => "Dólar de Barbados",
                    "COD"  => "BBD"
                ],
                [
                    "NAME" => "Dinar bareiní",
                    "COD"  => "BHD"
                ],
                [
                    "NAME" => "Dólar beliceño",
                    "COD"  => "BZD"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Dólar bermudeño",
                    "COD"  => "BMD"
                ],
                [
                    "NAME" => "Rublo bielorruso",
                    "COD"  => "BYR"
                ],
                [
                    "NAME" => "Kyat birmano",
                    "COD"  => "MMK"
                ],
                [
                    "NAME" => "Boliviano",
                    "COD"  => "BOB"
                ],
                [
                    "NAME" => "Mvdol",
                    "COD"  => "BOV"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Marco bosnioherzegovino",
                    "COD"  => "BAM"
                ],
                [
                    "NAME" => "Pula",
                    "COD"  => "BWP"
                ],
                [
                    "NAME" => "Real brasileño",
                    "COD"  => "BRL"
                ],
                [
                    "NAME" => "Dólar de Brunei",
                    "COD"  => "BND"
                ],
                [
                    "NAME" => "Lev",
                    "COD"  => "BGN"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Franco burundés",
                    "COD"  => "BIF"
                ],
                [
                    "NAME" => "Ngultrum butanés",
                    "COD"  => "BTN"
                ],
                [
                    "NAME" => "Rupia india",
                    "COD"  => "INR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Escudo caboverdiano",
                    "COD"  => "CVE"
                ],
                [
                    "NAME" => "Riel camboyano",
                    "COD"  => "KHR"
                ],
                [
                    "NAME" => "Franco CFA de África Central",
                    "COD"  => "XAF"
                ],
                [
                    "NAME" => "Dólar canadiense",
                    "COD"  => "CAD"
                ],
                [
                    "NAME" => "Franco CFA de África Central",
                    "COD"  => "XAF"
                ],
                [
                    "NAME" => "Unidad de Fomento",
                    "COD"  => "CLF"
                ],
                [
                    "NAME" => "Peso chileno",
                    "COD"  => "CLP"
                ],
                [
                    "NAME" => "Renminbi",
                    "COD"  => "CNY"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Peso colombiano",
                    "COD"  => "COP"
                ],
                [
                    "NAME" => "Unidad de valor real",
                    "COD"  => "COU"
                ],
                [
                    "NAME" => "Franco comorense",
                    "COD"  => "KMF"
                ],
                [
                    "NAME" => "Franco CFA de África Central",
                    "COD"  => "XAF"
                ],
                [
                    "NAME" => "Franco congoleño",
                    "COD"  => "CDF"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Colón costarricense",
                    "COD"  => "CRC"
                ],
                [
                    "NAME" => "Kuna",
                    "COD"  => "HRK"
                ],
                [
                    "NAME" => "Peso convertible",
                    "COD"  => "CUC"
                ],
                [
                    "NAME" => "Peso cubano",
                    "COD"  => "CUP"
                ],
                [
                    "NAME" => "Florín antillano neerlandés",
                    "COD"  => "ANG"
                ],
                [
                    "NAME" => "Corona danesa",
                    "COD"  => "DKK"
                ],
                [
                    "NAME" => "Dólar del Caribe Oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Libra egipcia",
                    "COD"  => "EGP"
                ],
                [
                    "NAME" => "Colón",
                    "COD"  => "SVC"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Dirham DE EAU",
                    "COD"  => "AED"
                ],
                [
                    "NAME" => "Nakfa",
                    "COD"  => "ERN"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],        
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Dólar estadounidense (Next day)",
                    "COD"  => "USN"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Birr etíope",
                    "COD"  => "ETB"
                ],
                [
                    "NAME" => "Dólar fiyiano",
                    "COD"  => "FJD"
                ],
                [
                    "NAME" => "Peso filipino",
                    "COD"  => "PHP"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "SDR (Derecho Especial de Retiro)",
                    "COD"  => "XDR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Franco CFA de África Central",
                    "COD"  => "XAF"
                ],
                [
                    "NAME" => "Dalasi",
                    "COD"  => "GMD"
                ],
                [
                    "NAME" => "Lari",
                    "COD"  => "GEL"
                ],
                [
                    "NAME" => "Cedi",
                    "COD"  => "GHS"
                ],
                [
                    "NAME" => "Libra gibraltareña",
                    "COD"  => "GIP"
                ],
                [
                    "NAME" => "Dólar del Caribe Oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Corona danesa",
                    "COD"  => "DKK"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Quetzal",
                    "COD"  => "GTQ"
                ],
                [
                    "NAME" => "Libra esterlina",
                    "COD"  => "GBP"
                ],
                [
                    "NAME" => "Franco guineano",
                    "COD"  => "GNF"
                ],
                [
                    "NAME" => "Franco CFA de África Central",
                    "COD"  => "XAF"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Dólar guyanés",
                    "COD"  => "GYD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Gourde",
                    "COD"  => "HTG"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Lempira",
                    "COD"  => "HNL"
                ],
                [
                    "NAME" => "Dólar de Hong Kong",
                    "COD"  => "HKD"
                ],
                [
                    "NAME" => "Forinto húngaro",
                    "COD"  => "HUF"
                ],
                [
                    "NAME" => "Rupia india",
                    "COD"  => "INR"
                ],
                [
                    "NAME" => "Rupia indonesia",
                    "COD"  => "IDR"
                ],
                [
                    "NAME" => "Dinar iraquí",
                    "COD"  => "IQD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Corona noruega",
                    "COD"  => "NOK"
                ],
                [
                    "NAME" => "Libra esterlina",
                    "COD"  => "GBP"
                ],
                [
                    "NAME" => "Dólar australiano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Dólar australiano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Corona islandesa",
                    "COD"  => "ISK"
                ],
                [
                    "NAME" => "Dólar de las Islas Cayman",
                    "COD"  => "KYD"
                ],
                [
                    "NAME" => "Dólar australiano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Dólar de la Islas Cook",
                    "COD"  => "NZD"
                ],
                [
                    "NAME" => "Corona danesa",
                    "COD"  => "DKK"
                ],
                [
                    "NAME" => "Dólar australiano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Libra malvinense",
                    "COD"  => "FKP"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Dólar de Islas Salomón",
                    "COD"  => "SBD"
                ],
                [
                    "NAME" => "Corona noruega",
                    "COD"  => "NOK"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Nuevo séquel",
                    "COD"  => "ILS"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar jamaiquino",
                    "COD"  => "JMD"
                ],
                [
                    "NAME" => "Yen",
                    "COD"  => "JPY"
                ],
                [
                    "NAME" => "Libra esterlina",
                    "COD"  => "GBP"
                ],
                [
                    "NAME" => "Dinar jordano",
                    "COD"  => "JOD"
                ],
                [
                    "NAME" => "Tenge kazajo",
                    "COD"  => "KZT"
                ],
                [
                    "NAME" => "Chelín keniano",
                    "COD"  => "KES"
                ],
                [
                    "NAME" => "Som",
                    "COD"  => "KGS"
                ],
                [
                    "NAME" => "Dólar australiano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Dinar kuwaití",
                    "COD"  => "KWD"
                ],
                [
                    "NAME" => "Loti",
                    "COD"  => "LSL"
                ],
                [
                    "NAME" => "Rand",
                    "COD"  => "ZAR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar liberiano",
                    "COD"  => "LRD"
                ],
                [
                    "NAME" => "Dinar libio",
                    "COD"  => "LYD"
                ],
                [
                    "NAME" => "Franco suizo",
                    "COD"  => "CHF"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Libra libanesa",
                    "COD"  => "LBP"
                ],
                [
                    "NAME" => "Pataca",
                    "COD"  => "MOP"
                ],
                [
                    "NAME" => "Dinar",
                    "COD"  => "MKD"
                ],
                [
                    "NAME" => "Ariary malgache",
                    "COD"  => "MGA"
                ],
                [
                    "NAME" => "Ringgit malayo",
                    "COD"  => "MYR"
                ],
                [
                    "NAME" => "Kwacha malauí",
                    "COD"  => "MWK"
                ],
                [
                    "NAME" => "Rupia de maldivas",
                    "COD"  => "MVR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Dírham marroquí",
                    "COD"  => "MAD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Rupia de Mauricio",
                    "COD"  => "MUR"
                ],
                [
                    "NAME" => "Uguiya",
                    "COD"  => "MRO"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Tugrik",
                    "COD"  => "MNT"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar del Caribe oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Metical mozambiqueño",
                    "COD"  => "MZN"
                ],
                [
                    "NAME" => "Peso mexicano",
                    "COD"  => "MXN"
                ],
                [
                    "NAME" => "Unidad de Inversion Mexicana(UDI)",
                    "COD"  => "MXV"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar de Namibia",
                    "COD"  => "NAD"
                ],
                [
                    "NAME" => "Rand",
                    "COD"  => "ZAR"
                ],
                [
                    "NAME" => "Dólar australiano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Rupia nepalí",
                    "COD"  => "NPR"
                ],
                [
                    "NAME" => "Córdoba oro",
                    "COD"  => "NIO"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Naira",
                    "COD"  => "NGN"
                ],
                [
                    "NAME" => "Dólar neozelandés",
                    "COD"  => "NZD"
                ],
                [
                    "NAME" => "Corona noruega",
                    "COD"  => "NOK"
                ],
                [
                    "NAME" => "Franco CFP",
                    "COD"  => "XPF"
                ],
                [
                    "NAME" => "Dólar neozelandés",
                    "COD"  => "NZD"
                ],
                [
                    "NAME" => "Rial omaní",
                    "COD"  => "OMR"
                ],
                [
                    "NAME" => "BAD UNIDAD DE CUENTAS",
                    "COD"  => "XUA"
                ],
                [
                    "NAME" => "Rupia pakistaní",
                    "COD"  => "PKR"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Balboa",
                    "COD"  => "PAB"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Kina",
                    "COD"  => "PGK"
                ],
                [
                    "NAME" => "Guaraní",
                    "COD"  => "PYG"
                ],
                [
                    "NAME" => "Nuevo Sol",
                    "COD"  => "PEN"
                ],
                [
                    "NAME" => "Dólar neozelandés",
                    "COD"  => "NZD"
                ],
                [
                    "NAME" => "Franco CFP",
                    "COD"  => "XPF"
                ],
                [
                    "NAME" => "Zloty",
                    "COD"  => "PLN"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Riyal catarí",
                    "COD"  => "QAR"
                ],
                [
                    "NAME" => "Libra esterlina",
                    "COD"  => "GBP"
                ],
                [
                    "NAME" => "Kip laosiano",
                    "COD"  => "LAK"
                ],
                [
                    "NAME" => "Bolívar",
                    "COD"  => "VEF"
                ],
                [
                    "NAME" => "Franco CFA de África Central",
                    "COD"  => "XAF"
                ],
                [
                    "NAME" => "Czech Koruna",
                    "COD"  => "CZK"
                ],
                [
                    "NAME" => "Won",
                    "COD"  => "KRW"
                ],
                [
                    "NAME" => "Leu Moldavo",
                    "COD"  => "MDL"
                ],
                [
                    "NAME" => "Won norcoreano",
                    "COD"  => "KPW"
                ],
                [
                    "NAME" => "Peso dominicano",
                    "COD"  => "DOP"
                ],
                [
                    "NAME" => "Rial iraní",
                    "COD"  => "IRR"
                ],
                [
                    "NAME" => "Chelín tanzano",
                    "COD"  => "TZS"
                ],
                [
                    "NAME" => "Libra siria",
                    "COD"  => "SYP"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Franco ruandés",
                    "COD"  => "RWF"
                ],
                [
                    "NAME" => "Leu rumano",
                    "COD"  => "RON"
                ],
                [
                    "NAME" => "Rublo ruso",
                    "COD"  => "RUB"
                ],
                [
                    "NAME" => "Dirham marroquí",
                    "COD"  => "MAD"
                ],
                [
                    "NAME" => "Tala",
                    "COD"  => "WST"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar del Caribe oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Florín holandés",
                    "COD"  => "ANG"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dobra",
                    "COD"  => "STD"
                ],
                [
                    "NAME" => "Dólar del Caribe oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Libra de Santa Helena",
                    "COD"  => "SHP"
                ],
                [
                    "NAME" => "Dólar del Caribe oriental",
                    "COD"  => "XCD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Dinar serbio",
                    "COD"  => "RSD"
                ],
                [
                    "NAME" => "Rupia de Seychelles",
                    "COD"  => "SCR"
                ],
                [
                    "NAME" => "Leone",
                    "COD"  => "SLL"
                ],
                [
                    "NAME" => "Dólar de Singapur",
                    "COD"  => "SGD"
                ],
                [
                    "NAME" => "Sucre",
                    "COD"  => "XSU"
                ],
                [
                    "NAME" => "Chelín somalí",
                    "COD"  => "SOS"
                ],
                [
                    "NAME" => "Rupia de Sri Lanka",
                    "COD"  => "LKR"
                ],
                [
                    "NAME" => "Lilangeni",
                    "COD"  => "SZL"
                ],
                [
                    "NAME" => "Rand",
                    "COD"  => "ZAR"
                ],
                [
                    "NAME" => "Libra sudanesa",
                    "COD"  => "SDG"
                ],
                [
                    "NAME" => "Libra sursudanesa",
                    "COD"  => "SSP"
                ],
                [
                    "NAME" => "Corona sueca",
                    "COD"  => "SEK"
                ],
                [
                    "NAME" => "WIR Euro",
                    "COD"  => "CHE"
                ],
                [
                    "NAME" => "Franco suizo",
                    "COD"  => "CHF"
                ],
                [
                    "NAME" => "Franco WIR",
                    "COD"  => "CHW"
                ],
                [
                    "NAME" => "Dólar de Surinam",
                    "COD"  => "SRD"
                ],
                [
                    "NAME" => "Baht",
                    "COD"  => "THB"
                ],
                [
                    "NAME" => "Nuevo dólar de Taiwán",
                    "COD"  => "TWD"
                ],
                [
                    "NAME" => "Somoni",
                    "COD"  => "TJS"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Dólar estadounidense",
                    "COD"  => "USD"
                ],
                [
                    "NAME" => "Franco CFA de África Occidental",
                    "COD"  => "XOF"
                ],
                [
                    "NAME" => "Dólar neozelandés",
                    "COD"  => "NZD"
                ],
                [
                    "NAME" => "Pa’anga",
                    "COD"  => "TOP"
                ],
                [
                    "NAME" => "Dólar de Trinidad y Tobago",
                    "COD"  => "TTD"
                ],
                [
                    "NAME" => "Manat turcomano",
                    "COD"  => "TMT"
                ],
                [
                    "NAME" => "Lira turca",
                    "COD"  => "TRY"
                ],
                [
                    "NAME" => "Dólar tuvaluano",
                    "COD"  => "AUD"
                ],
                [
                    "NAME" => "Dinar tunecino",
                    "COD"  => "TND"
                ],
                [
                    "NAME" => "Chelín ugandés",
                    "COD"  => "UGX"
                ],
                [
                    "NAME" => "Grivnia",
                    "COD"  => "UAH"
                ],
                [
                    "NAME" => "Euro",
                    "COD"  => "EUR"
                ],
                [
                    "NAME" => "Peso uruguayo en unidades indexadas (URUIURUI)",
                    "COD"  => "UYI"
                ],
                [
                    "NAME" => "Peso uruguayo",
                    "COD"  => "UYU"
                ],
                [
                    "NAME" => "Som uzbeko",
                    "COD"  => "UZS"
                ],
                [
                    "NAME" => "Vatu",
                    "COD"  => "VUV"
                ],
                [
                    "NAME" => "Dong",
                    "COD"  => "VND"
                ],
                [
                    "NAME" => "Franco CFP",
                    "COD"  => "XPF"
                ],
                [
                    "NAME" => "Rial yemení",
                    "COD"  => "YER"
                ],
                [
                    "NAME" => "Franco yibutiano",
                    "COD"  => "DJF"
                ],
                [
                    "NAME" => "Kwacha zambiano",
                    "COD"  => "ZMW"
                ],
                [
                    "NAME" => "Dólar zimbabuense",
                    "COD"  => "ZWL"
                ]
            ];
    }
}
