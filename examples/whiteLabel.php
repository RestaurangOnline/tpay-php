<?php

/*
 * Created by tpay.com
 */

class WhiteLabel
{
    private $tpay;

    public function __construct(tpay\PaymentWhiteLabel $object)
    {
        $this->tpay = $object;
    }

    public function getInstruction()
    {

        /**
         * Get bank instruction how add
         */
        $bankID = 18;
        return $this->tpay->getBankInstr($bankID);

        /*
            string(1927) "<link rel="stylesheet" type="text/css" href="../_css/bank_instruction.css"/>
            <div id="white-label-bank-instruction">
                <div class="bank-block">
                    <img src="https://secure.transferuj.pl/_/banks/b18.png" alt=""/>
                                <p>
            1. Zaloguj się do banku i wybierz rachunek, w którym chcesz zdefiniować odbiorcę
            2. Przejdź do zakładki Odbiorcy zdefiniowani -> Nowy Odbiorca
            3. Wypełnij dane odbiorcy oraz tytuł przelewu zgodnie z instrukcją,
            zwróć szczególną uwagę na poprawność tytułu
            4. Potwierdź kodem SMS lub hasłem jednorazowym
            5. Teraz możesz wykonać zasilenie Twojego iKonta w dowolnym momencie, bezpośrednio z banku!
            Tytuł płatności jest zawsze ten sam, kwota dowolna
            6. Jeżeli zdefiniujesz dane do przelewu bez dodatkowej autoryzacji SMS, to przelew będzie można wykonać
            również z Twojego telefonu komórkowego za pomocą mobilnej bankowości internetowej!</p>
                        <p>
            1. Przejdź do listy odbiorców zdefiniowanych
            2. Pod nazwą odbiorcy Zasilenie kliknij Wykonaj przelew
            3. Tytułu nie zmieniaj, wpisz kwotę, którą chcesz doładować twoje konto,
            przejdź dalej i zatwierdź przelew</p>
                        <p>
            1. Po zalogowaniu do banku wybierz rachunek i przejdź do zakładki przelew jednorazowy
            2. Wypełnij dane odbiorcy oraz tytuł przelewu zgodnie z instrukcją,
            zwróć szczególną uwagę na poprawność tytułu
            3. Wpisz dowolną kwotę, jaką chcesz doładować twoje konto
            4. Przejdź dalej i zatwierdź przelew.
            5. Po wykonaniu przelewu kliknij Zapisz odbiorcę
            6. Możesz wykonać zasilenie Twojego wirtualnego konta w dowolnym momencie,
            bezpośrednio z banku! Tytuł płatności jest zawsze ten sam, kwota dowolna
            7. Jeżeli zdefiniujesz dane do przelewu bez dodatkowej autoryzacji SMS,
            to przelew będzie można wykonać również z Twojego telefonu komórkowego
            za pomocą mobilnej bankowości internetowej!</p>
                </div>
            </div>"
         */

    }


    public function getBankData()
    {
        /**
         * Get banks data
         */
        return $this->tpay->getBanksData();

        /**
            array(2) {
              ["data"]=>
              array(26) {
                [0]=>
                array(6) {
                  ["bank_id"]=>
                  string(2) "18"
                  ["fullname"]=>
                  string(5) "mBank"
                  ["account_number"]=>
                  string(26) "45114011240000290291001006"
                  ["login_url"]=>
                  string(32) "https://online.mbank.pl/pl/Login"
                  ["availability"]=>
                  array(3) {
                    ["weekday"]=>
                    array(1) {
                      [0]=>
                      string(11) "02:00-19:00"
                    }
                    ["saturday"]=>
                    array(1) {
                      [0]=>
                      string(11) "00:00-00:00"
                    }
                    ["holiday"]=>
                    array(1) {
                      [0]=>
                      string(11) "00:00-00:00"
                    }
                  }
                  ["receiver"]=>
                  string(0) ""
                }
                [1]=>
                array(6) {
                  ["bank_id"]=>
                  string(2) "13"
                  ["fullname"]=>
                  string(20) "ING Bank Śląski SA"
                  ["account_number"]=>
                  string(26) "63105015201000009091194713"
                  ["login_url"]=>
                  string(43) "https://online.ingbank.pl/bskonl/login.html"
                  ["availability"]=>
                  array(3) {
                    ["weekday"]=>
                    array(1) {
                      [0]=>
                      string(11) "00:00-24:00"
                    }
                    ["saturday"]=>
                    array(1) {
                      [0]=>
                      string(11) "00:00-24:00"
                    }
                    ["holiday"]=>
                    array(1) {
                      [0]=>
                      string(11) "00:00-24:00"
                    }
                  }
                  ["receiver"]=>
                  string(0) ""
                }
              }
            }
         */


    }

    public function registerOrder()
    {
        /**
         * Register new order
         */

        $clientName = 'Jan Kowalski';
        $clientEmail = 'jan.kowalski@example.com';
        $clientPhone = '126354789';
        $amount = 999.99;

        return $this->tpay->registerOrder($clientName, $clientEmail, $clientPhone, $amount);

        /*
            string(12) "KIP438011754"
         */

    }

    public function registerIncomeTest()
    {
        /**
         * Register client income in test mode.
         */

        $clientTitle = 'KIP438011754';
        $amount = 100;

        return $this->tpay->registerIncome($clientTitle, $amount);

        /*
          string(82) " correct "
         */

    }

    public function updateNotificationUrl()
    {
        /**
         * Update notification URL
         */

        $notificationURL = 'http://example.pl?szkwal_notification';

        return $this->tpay->changeSellerData($notificationURL);

        /*
            bool(true)
         */
    }

}
