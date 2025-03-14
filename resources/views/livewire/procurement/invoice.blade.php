<div>
    <style>

        span[contenteditable] { display: inline-block; }

        /* heading */

        h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

        /* table */

        table { font-size: 75%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
        th, td { border-radius: 0.25em; border-style: solid; }
        th { background: #EEE; border-color: #BBB; }
        td { border-color: #DDD; }

        /* page */




        /* header */



        article, article address, table.meta, table.inventory { margin: 0 0 3em; }
        article:after { clear: both; content: ""; display: table; }
        article h1 { clip: rect(0 0 0 0); position: absolute; }

        article address { float: left; font-size: 125%; font-weight: bold; }

        /* table meta & balance */

        table.meta, table.balance { float: right; width: 36%; }
        table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

        /* table meta */

        table.meta th { width: 40%; }
        table.meta td { width: 60%; }

        /* table items */

        table.inventory { clear: both; width: 100%; }
        table.inventory th { font-weight: bold; text-align: center; }

        table.inventory td:nth-child(1) { width: 26%; }
        table.inventory td:nth-child(2) { width: 38%; }
        table.inventory td:nth-child(3) { text-align: right; width: 12%; }
        table.inventory td:nth-child(4) { text-align: right; width: 12%; }
        table.inventory td:nth-child(5) { text-align: right; width: 12%; }

        /* table balance */

        table.balance th, table.balance td { width: 50%; }
        table.balance td { text-align: right; }

        /* aside */

        aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
        aside h1 { border-color: #999; border-bottom-style: solid; }

        /* javascript */
        article{
            margin: 20px;
        }

        .add, .cut
        {
            border-width: 1px;
            display: block;
            font-size: .8rem;
            padding: 0.25em 0.5em;
            float: left;
            text-align: center;
            width: 0.6em;
        }

        .add, .cut
        {
            background: #9AF;
            box-shadow: 0 1px 2px rgba(0,0,0,0.2);
            background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
            background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
            border-radius: 0.5em;
            border-color: #0076A3;
            color: #FFF;
            cursor: pointer;
            font-weight: bold;
            text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
        }

        .add { margin: -2.5em 0 0; }

        .add:hover { background: #00ADEE; }

        .cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
        .cut { -webkit-transition: opacity 100ms ease-in; }

        tr:hover .cut { opacity: 1; }

        @media print {
            * { -webkit-print-color-adjust: exact; }
            html { background: none; padding: 0; }
            body { box-shadow: none; margin: 0; }
            span:empty { display: none; }
            .add, .cut { display: none; }
        }

        @page { margin: 0; }
    </style>

    <article>
        <h1>Recipient</h1>
        <address contenteditable>
            <p>NBC <br> BANK</p>
        </address>
        <table class="meta">
            <tr>
                <th><span contenteditable>Invoice #</span></th>
                <td><span contenteditable>101138</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Date</span></th>
                <td><span contenteditable>January 1, 2012</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Amount Due</span></th>
                <td><span id="prefix" contenteditable>$</span><span>600.00</span></td>
            </tr>
        </table>
        <table class="inventory">
            <thead>
            <tr>
                <th><span contenteditable>Item</span></th>
                <th><span contenteditable>Description</span></th>
                <th><span contenteditable>Rate</span></th>
                <th><span contenteditable>Quantity</span></th>
                <th><span contenteditable>Price</span></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a class="cut">-</a><span contenteditable>Front End Consultation</span></td>
                <td><span contenteditable>Experience Review</span></td>
                <td><span data-prefix>$</span><span contenteditable>150.00</span></td>
                <td><span contenteditable>4</span></td>
                <td><span data-prefix>$</span><span>600.00</span></td>
            </tr>
            </tbody>
        </table>
        <a class="add">+</a>
        <table class="balance">
            <tr>
                <th><span contenteditable>Total</span></th>
                <td><span data-prefix>$</span><span>600.00</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Amount Paid</span></th>
                <td><span data-prefix>$</span><span contenteditable>0.00</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Balance Due</span></th>
                <td><span data-prefix>$</span><span>600.00</span></td>
            </tr>
        </table>
    </article>
    <aside>
        <h1><span contenteditable>Additional Notes</span></h1>
        <div contenteditable>
            <p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
        </div>
    </aside>

</div>
