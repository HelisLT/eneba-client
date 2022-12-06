# Schema Types

<details>
  <summary><strong>Table of Contents</strong></summary>

  * [Query](#query)
  * [Mutation](#mutation)
  * [Objects](#objects)
    * [A_Action](#a_action)
    * [B_API_AdminGoodwillTransaction](#b_api_admingoodwilltransaction)
    * [B_API_AdminGoodwillWithdrawableTransaction](#b_api_admingoodwillwithdrawabletransaction)
    * [B_API_AdminManualFundsTransaction](#b_api_adminmanualfundstransaction)
    * [B_API_AdminSalePartialTransaction](#b_api_adminsalepartialtransaction)
    * [B_API_AdminSaleTransaction](#b_api_adminsaletransaction)
    * [B_API_AffiliateTransaction](#b_api_affiliatetransaction)
    * [B_API_AuctionCampaignFeeTransaction](#b_api_auctioncampaignfeetransaction)
    * [B_API_AuctionEditFeeTransaction](#b_api_auctioneditfeetransaction)
    * [B_API_AuctionRenewFeeTransaction](#b_api_auctionrenewfeetransaction)
    * [B_API_AuctionUnfulfilledSaleFeeTransaction](#b_api_auctionunfulfilledsalefeetransaction)
    * [B_API_CurrencyPair](#b_api_currencypair)
    * [B_API_DepositTransaction](#b_api_deposittransaction)
    * [B_API_ExchangeTransaction](#b_api_exchangetransaction)
    * [B_API_FeeTransaction](#b_api_feetransaction)
    * [B_API_FundsReleaseFeeTransaction](#b_api_fundsreleasefeetransaction)
    * [B_API_GiftCardsPurchaseTransaction](#b_api_giftcardspurchasetransaction)
    * [B_API_NewAuctionFeeTransaction](#b_api_newauctionfeetransaction)
    * [B_API_PartialItemRefundTransaction](#b_api_partialitemrefundtransaction)
    * [B_API_PurchaseTransaction](#b_api_purchasetransaction)
    * [B_API_PurchaseWalletPortionTransaction](#b_api_purchasewalletportiontransaction)
    * [B_API_SaleTransaction](#b_api_saletransaction)
    * [B_API_TransactionConnection](#b_api_transactionconnection)
    * [B_API_TransactionEdge](#b_api_transactionedge)
    * [B_API_WithdrawTransaction](#b_api_withdrawtransaction)
    * [B_Money](#b_money)
    * [B_PageInfo](#b_pageinfo)
    * [G_API_GiftCardCode](#g_api_giftcardcode)
    * [G_AccountSecurityAwarePaymentMethod](#g_accountsecurityawarepaymentmethod)
    * [G_ApplePayPaymentMethod](#g_applepaypaymentmethod)
    * [G_CardPaymentMethod](#g_cardpaymentmethod)
    * [G_CardVaultUser](#g_cardvaultuser)
    * [G_EmailVaultUser](#g_emailvaultuser)
    * [G_FieldConstraint](#g_fieldconstraint)
    * [G_GooglePayPaymentMethod](#g_googlepaypaymentmethod)
    * [G_Money](#g_money)
    * [G_PaymentMethod](#g_paymentmethod)
    * [G_PaymentMethodField](#g_paymentmethodfield)
    * [G_RemoveVaultUserResponse](#g_removevaultuserresponse)
    * [P_API_Callback](#p_api_callback)
    * [P_API_CallbackFailureReason](#p_api_callbackfailurereason)
    * [P_API_CallbackRequest](#p_api_callbackrequest)
    * [P_API_CallbackResponse](#p_api_callbackresponse)
    * [P_API_CallbackResult](#p_api_callbackresult)
    * [P_API_DeclaredStockResult](#p_api_declaredstockresult)
    * [P_API_EnableDeclaredStockResponse](#p_api_enabledeclaredstockresponse)
    * [P_API_RegisterCallbackResponse](#p_api_registercallbackresponse)
    * [P_API_RemoveCallbackResponse](#p_api_removecallbackresponse)
    * [S_API_AddedKey](#s_api_addedkey)
    * [S_API_Auction](#s_api_auction)
    * [S_API_AuctionConnection](#s_api_auctionconnection)
    * [S_API_AuctionEdge](#s_api_auctionedge)
    * [S_API_CreateAuctionResponse](#s_api_createauctionresponse)
    * [S_API_Key](#s_api_key)
    * [S_API_KeyConnection](#s_api_keyconnection)
    * [S_API_KeyEdge](#s_api_keyedge)
    * [S_API_PriceUpdateQuota](#s_api_priceupdatequota)
    * [S_API_Product](#s_api_product)
    * [S_API_ProductConnection](#s_api_productconnection)
    * [S_API_ProductEdge](#s_api_productedge)
    * [S_API_PurchaseGiftCardsResponse](#s_api_purchasegiftcardsresponse)
    * [S_API_Sales](#s_api_sales)
    * [S_API_SalesConnection](#s_api_salesconnection)
    * [S_API_SalesEdge](#s_api_salesedge)
    * [S_API_Stock](#s_api_stock)
    * [S_API_StockConnection](#s_api_stockconnection)
    * [S_API_StockEdge](#s_api_stockedge)
    * [S_API_UpdateAuctionResponse](#s_api_updateauctionresponse)
    * [S_Money](#s_money)
    * [S_PageInfo](#s_pageinfo)
    * [S_PlatformEnumValue](#s_platformenumvalue)
    * [S_ProductRegion](#s_productregion)
    * [S_ProductTypeEnumValue](#s_producttypeenumvalue)
    * [T_CountFeeResponse](#t_countfeeresponse)
    * [T_Money](#t_money)
  * [Inputs](#inputs)
    * [G_RemoveVaultUserInput](#g_removevaultuserinput)
    * [G_VaultUserInput](#g_vaultuserinput)
    * [G_VaultUsersInput](#g_vaultusersinput)
    * [P_API_RegisterCallbackInput](#p_api_registercallbackinput)
    * [P_API_RemoveCallbackInput](#p_api_removecallbackinput)
    * [S_API_CreateAuctionInput](#s_api_createauctioninput)
    * [S_API_PurchaseGiftCardsInput](#s_api_purchasegiftcardsinput)
    * [S_API_StockFilters](#s_api_stockfilters)
    * [S_API_UpdateAuctionInput](#s_api_updateauctioninput)
    * [S_DateTimeRangeInput](#s_datetimerangeinput)
    * [S_MoneyInput](#s_moneyinput)
    * [S_MoneyRangeInput](#s_moneyrangeinput)
  * [Enums](#enums)
    * [A_ActionStateEnum](#a_actionstateenum)
    * [B_API_TransactionsSort](#b_api_transactionssort)
    * [B_DirectionEnum](#b_directionenum)
    * [B_FeeType](#b_feetype)
    * [B_TransactionStatus](#b_transactionstatus)
    * [B_TransactionType](#b_transactiontype)
    * [G_CardSchemeEnum](#g_cardschemeenum)
    * [G_CardTypeEnum](#g_cardtypeenum)
    * [G_CodeState](#g_codestate)
    * [G_CountryEnum](#g_countryenum)
    * [G_CurrencyEnum](#g_currencyenum)
    * [G_FieldTypeEnum](#g_fieldtypeenum)
    * [G_PaymentMethodEnum](#g_paymentmethodenum)
    * [P_API_CallbackStatusEnum](#p_api_callbackstatusenum)
    * [P_API_CallbackTypeEnum](#p_api_callbacktypeenum)
    * [P_API_DeclaredStockEnablingFailureEnum](#p_api_declaredstockenablingfailureenum)
    * [S_API_KeysSort](#s_api_keyssort)
    * [S_API_ProductsSort](#s_api_productssort)
    * [S_API_SellingStatus](#s_api_sellingstatus)
    * [S_API_StockFiltersSortEnum](#s_api_stockfilterssortenum)
    * [S_KeyFormat](#s_keyformat)
    * [S_KeyState](#s_keystate)
    * [S_Platform](#s_platform)
    * [S_ProductTypeEnum](#s_producttypeenum)
    * [S_RelationEnum](#s_relationenum)
    * [T_FeeTypeEnum](#t_feetypeenum)
  * [Scalars](#scalars)
    * [A_Uuid](#a_uuid)
    * [B_Currency](#b_currency)
    * [B_DateTime](#b_datetime)
    * [B_Uuid](#b_uuid)
    * [Boolean](#boolean)
    * [Float](#float)
    * [G_DateTime](#g_datetime)
    * [G_Json](#g_json)
    * [G_Uuid](#g_uuid)
    * [Int](#int)
    * [P_DateTime](#p_datetime)
    * [P_Uuid](#p_uuid)
    * [S_AvailableCurrencyType](#s_availablecurrencytype)
    * [S_DateTime](#s_datetime)
    * [S_GiftCardCurrencyType](#s_giftcardcurrencytype)
    * [S_Uuid](#s_uuid)
    * [String](#string)
    * [T_AvailableCurrencyType](#t_availablecurrencytype)
  * [Interfaces](#interfaces)
    * [B_API_TransactionInterface](#b_api_transactioninterface)
    * [G_PaymentMethodInterface](#g_paymentmethodinterface)
    * [G_VaultUserInterface](#g_vaultuserinterface)

</details>

## Query
<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>B_transactions</strong></td>
<td valign="top"><a href="#b_api_transactionconnection">B_API_TransactionConnection</a></td>
<td>

Paginated list of all your transactions

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">after</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come after the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">first</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the first n elements from the list

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">direction</td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">status</td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">types</td>
<td valign="top">[<a href="#b_transactiontype">B_TransactionType</a>!]</td>
<td>

Transaction type. By default returns all types

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">createdFrom</td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Lower date and time range of transactions

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">createdTo</td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Upper date and time range of transaction

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">amountMin</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Minimal amount of transaction

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">amountMax</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Maximal amount of transaction

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">code</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Transaction number

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">orderNumber</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Order number

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">referenceName</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Reference name of transaction

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">sort</td>
<td valign="top"><a href="#b_api_transactionssort">B_API_TransactionsSort</a></td>
<td>

Transactions sorting option. Default to oldest first

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>G_giftCards</strong></td>
<td valign="top">[<a href="#g_api_giftcardcode">G_API_GiftCardCode</a>!]</td>
<td>

Returns gift card codes or empty list if no codes found by given batchId

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">batchId</td>
<td valign="top"><a href="#g_uuid">G_Uuid</a>!</td>
<td>

The ID of the purchased batch

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>S_stock</strong></td>
<td valign="top"><a href="#s_api_stockconnection">S_API_StockConnection</a></td>
<td>

Paginated list of your auctions in stock

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">after</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come after the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">first</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the first n elements from the list

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">stockId</td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

The ID of the stock. If NULL provided - all auctions will be returned

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">productId</td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

The ID of the associated product. If NULL provided - all auctions will be returned

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">filters</td>
<td valign="top"><a href="#s_api_stockfilters">S_API_StockFilters</a></td>
<td>

Stock filters and sorting. Do not include fields to ignore them

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>S_keys</strong></td>
<td valign="top"><a href="#s_api_keyconnection">S_API_KeyConnection</a></td>
<td>

Paginated list of your auction's keys

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">after</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come after the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">first</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the first n elements from the list

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">stockId</td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

The ID of the stock item. Either this argument, "stockId" or "orderNumber" is required.

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">state</td>
<td valign="top"><a href="#s_keystate">S_KeyState</a></td>
<td>

The state of keys. If NULL provided - all state keys will be returned

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">sort</td>
<td valign="top"><a href="#s_api_keyssort">S_API_KeysSort</a></td>
<td>

Keys sorting option. Default to oldest first

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">ids</td>
<td valign="top">[<a href="#s_uuid">S_Uuid</a>!]</td>
<td>

IDs of requested keys. Either this argument, "stockId", "orderNumber" or "ordersNumbers" is required.

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">orderNumber</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Associated order number. Either this argument, "stockId", "ordersNumbers" or "ids" is required.

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">ordersNumbers</td>
<td valign="top">[<a href="#string">String</a>!]</td>
<td>

Associated orders numbers. Either this argument, "stockId", "orderNumber" or "ids" is required.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>S_products</strong></td>
<td valign="top"><a href="#s_api_productconnection">S_API_ProductConnection</a></td>
<td>

Paginated list of all available products

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">after</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come after the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">first</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the first n elements from the list

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">onlyUnmapped</td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

Returns only unmapped products

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">createdSince</td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

Returns products created since given date

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">releasedSince</td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

Returns products released or to be released since given date

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">search</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Search phrase for product name

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">sort</td>
<td valign="top"><a href="#s_api_productssort">S_API_ProductsSort</a></td>
<td>

Products sorting option

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">slugs</td>
<td valign="top">[<a href="#string">String</a>!]</td>
<td>

Product slugs to search for

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>S_product</strong></td>
<td valign="top"><a href="#s_api_product">S_API_Product</a></td>
<td>

Returns single product

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">productId</td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the product

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>S_sales</strong></td>
<td valign="top"><a href="#s_api_salesconnection">S_API_SalesConnection</a></td>
<td>

Paginated list of all your sales

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">after</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come after the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">first</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the first n elements from the list

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">dateFrom</td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

Lower date and time range of sale

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">dateTo</td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

Upper date and time range of sale

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">auctionId</td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

The ID of the auction. If NULL provided - all sales will be returned

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">orderId</td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

The ID of the order. If NULL provided - all sales will be returned

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>A_action</strong></td>
<td valign="top"><a href="#a_action">A_Action</a></td>
<td>

Returns action state. Returns NULL if action is not started yet

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">actionId</td>
<td valign="top"><a href="#a_uuid">A_Uuid</a>!</td>
<td>

The ID of the action

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>T_countFee</strong></td>
<td valign="top"><a href="#t_countfeeresponse">T_CountFeeResponse</a></td>
<td>

Returns counted fee

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">currency</td>
<td valign="top"><a href="#t_availablecurrencytype">T_AvailableCurrencyType</a></td>
<td>

Requested fee currency

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">type</td>
<td valign="top"><a href="#t_feetypeenum">T_FeeTypeEnum</a>!</td>
<td>

Fee type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>P_apiCallbacks</strong></td>
<td valign="top">[<a href="#p_api_callback">P_API_Callback</a>!]</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>P_declaredStockResult</strong></td>
<td valign="top"><a href="#p_api_declaredstockresult">P_API_DeclaredStockResult</a></td>
<td>

The result of DeclaredStock requests

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">orderId</td>
<td valign="top"><a href="#p_uuid">P_Uuid</a>!</td>
<td>

The ID of the Order, processed by DeclaredStock

</td>
</tr>
</tbody>
</table>

## Mutation
<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>S_updateAuction</strong></td>
<td valign="top"><a href="#s_api_updateauctionresponse">S_API_UpdateAuctionResponse</a></td>
<td>

Initiate update of the auction

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">input</td>
<td valign="top"><a href="#s_api_updateauctioninput">S_API_UpdateAuctionInput</a>!</td>
<td>

Auction update data

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>S_purchaseGiftCards</strong></td>
<td valign="top"><a href="#s_api_purchasegiftcardsresponse">S_API_PurchaseGiftCardsResponse</a></td>
<td>

Initiate gift cards purchase

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">input</td>
<td valign="top"><a href="#s_api_purchasegiftcardsinput">S_API_PurchaseGiftCardsInput</a>!</td>
<td>

Gift cards purchase details

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>S_createAuction</strong></td>
<td valign="top"><a href="#s_api_createauctionresponse">S_API_CreateAuctionResponse</a></td>
<td>

Initiate creation of the auction

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">input</td>
<td valign="top"><a href="#s_api_createauctioninput">S_API_CreateAuctionInput</a>!</td>
<td>

Auction creation data

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>P_registerCallback</strong></td>
<td valign="top"><a href="#p_api_registercallbackresponse">P_API_RegisterCallbackResponse</a></td>
<td>

Register the callback URL used in the purchase process

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">input</td>
<td valign="top"><a href="#p_api_registercallbackinput">P_API_RegisterCallbackInput</a>!</td>
<td>

Callback URL and Type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>P_removeCallback</strong></td>
<td valign="top"><a href="#p_api_removecallbackresponse">P_API_RemoveCallbackResponse</a></td>
<td>

Remove the callback URL used in purchase process

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">input</td>
<td valign="top"><a href="#p_api_removecallbackinput">P_API_RemoveCallbackInput</a>!</td>
<td>

Callback ID to remove

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>P_enableDeclaredStock</strong></td>
<td valign="top"><a href="#p_api_enabledeclaredstockresponse">P_API_EnableDeclaredStockResponse</a></td>
<td>

Enable the DeclaredStock feature. This requires a successful DeclaredStock integration in the Sandbox.

</td>
</tr>
</tbody>
</table>

## Objects

### A_Action

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#a_uuid">A_Uuid</a>!</td>
<td>

The ID of the action

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>state</strong></td>
<td valign="top"><a href="#a_actionstateenum">A_ActionStateEnum</a>!</td>
<td>

Current action state

</td>
</tr>
</tbody>
</table>

### B_API_AdminGoodwillTransaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_AdminGoodwillWithdrawableTransaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_AdminManualFundsTransaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>adminId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td></td>
</tr>
</tbody>
</table>

### B_API_AdminSalePartialTransaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_AdminSaleTransaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_AffiliateTransaction

Affiliate transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_AuctionCampaignFeeTransaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>orderNumber</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Associated order number

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>referenceName</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Reference name

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>keyId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td>

Sold key id

</td>
</tr>
</tbody>
</table>

### B_API_AuctionEditFeeTransaction

Auction edit transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>feeType</strong></td>
<td valign="top"><a href="#b_feetype">B_FeeType</a></td>
<td>

Fee type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>auctionId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td>

Auction ID

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>referenceName</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Reference name

</td>
</tr>
</tbody>
</table>

### B_API_AuctionRenewFeeTransaction

Auction renew fee transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>feeType</strong></td>
<td valign="top"><a href="#b_feetype">B_FeeType</a></td>
<td>

Fee type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>auctionId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td>

Auction ID

</td>
</tr>
</tbody>
</table>

### B_API_AuctionUnfulfilledSaleFeeTransaction

Auction unfulfilled sale transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>feeType</strong></td>
<td valign="top"><a href="#b_feetype">B_FeeType</a></td>
<td>

Fee type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>auctionId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td>

Auction ID

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>referenceName</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Reference name

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>orderId</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Order ID

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>quantity</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

The quantity for which the fee is calculated

</td>
</tr>
</tbody>
</table>

### B_API_CurrencyPair

Currency pair details

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>baseCurrency</strong></td>
<td valign="top"><a href="#b_currency">B_Currency</a></td>
<td>

Base currency

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>counterCurrency</strong></td>
<td valign="top"><a href="#b_currency">B_Currency</a></td>
<td>

Counter currency

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>conversionRatio</strong></td>
<td valign="top"><a href="#float">Float</a></td>
<td>

Conversation ratio

</td>
</tr>
</tbody>
</table>

### B_API_DepositTransaction

Deposit transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_ExchangeTransaction

Money exchange transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currencyPair</strong></td>
<td valign="top"><a href="#b_api_currencypair">B_API_CurrencyPair</a></td>
<td>

Currency exchange details

</td>
</tr>
</tbody>
</table>

### B_API_FeeTransaction

Fee transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>feeType</strong></td>
<td valign="top"><a href="#b_feetype">B_FeeType</a></td>
<td>

Fee type

</td>
</tr>
</tbody>
</table>

### B_API_FundsReleaseFeeTransaction

Funds release fee transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>feeType</strong></td>
<td valign="top"><a href="#b_feetype">B_FeeType</a></td>
<td>

Fee type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>referenceName</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Reference name

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>receivedMoney</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Received money

</td>
</tr>
</tbody>
</table>

### B_API_GiftCardsPurchaseTransaction

Gift cards purchase transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>batchName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Gift cards batch name

</td>
</tr>
</tbody>
</table>

### B_API_NewAuctionFeeTransaction

New auction fee transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>feeType</strong></td>
<td valign="top"><a href="#b_feetype">B_FeeType</a></td>
<td>

Fee type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>auctionId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td>

Auction ID

</td>
</tr>
</tbody>
</table>

### B_API_PartialItemRefundTransaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_PurchaseTransaction

Purchase transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>orderNumber</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Associated order number

</td>
</tr>
</tbody>
</table>

### B_API_PurchaseWalletPortionTransaction

Purchase transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### B_API_SaleTransaction

Sale transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>orderNumber</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Associated order number

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>orderId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td>

Associated order ID

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>presale</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>referenceName</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Reference name

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>keyId</strong></td>
<td valign="top"><a href="#b_uuid">B_Uuid</a></td>
<td>

Sold key id

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>fullPaidPriceForOrderItem</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Full price paid by user for order items

</td>
</tr>
</tbody>
</table>

### B_API_TransactionConnection

A connection to a list of items.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>totalCount</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Total connections count

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>pageInfo</strong></td>
<td valign="top"><a href="#b_pageinfo">B_PageInfo</a>!</td>
<td>

Information to aid in pagination.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>edges</strong></td>
<td valign="top">[<a href="#b_api_transactionedge">B_API_TransactionEdge</a>]</td>
<td>

Information to aid in pagination.

</td>
</tr>
</tbody>
</table>

### B_API_TransactionEdge

An edge in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>node</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

The item at the end of the edge.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>cursor</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

A cursor for use in pagination.

</td>
</tr>
</tbody>
</table>

### B_API_WithdrawTransaction

Withdraw transaction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>invoiceUrl</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Withdraw invoice URL

</td>
</tr>
</tbody>
</table>

### B_Money

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>amount</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Money amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currency</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Money currency code

</td>
</tr>
</tbody>
</table>

### B_PageInfo

Information about pagination in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>hasNextPage</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

When paginating forwards, are there more items?

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>hasPreviousPage</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

When paginating backwards, are there more items?

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>startCursor</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

When paginating backwards, the cursor to continue.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>endCursor</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

When paginating forwards, the cursor to continue.

</td>
</tr>
</tbody>
</table>

### G_API_GiftCardCode

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Gift card code

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>state</strong></td>
<td valign="top"><a href="#g_codestate">G_CodeState</a>!</td>
<td>

Gift card state

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>denomination</strong></td>
<td valign="top"><a href="#g_money">G_Money</a>!</td>
<td>

Gift card denomination

</td>
</tr>
</tbody>
</table>

### G_AccountSecurityAwarePaymentMethod

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>providerName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>fields</strong></td>
<td valign="top">[<a href="#g_paymentmethodfield">G_PaymentMethodField</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>countries</strong></td>
<td valign="top">[<a href="#g_countryenum">G_CountryEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currencies</strong></td>
<td valign="top">[<a href="#g_currencyenum">G_CurrencyEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>refundable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>synonymousMethodNames</strong></td>
<td valign="top">[<a href="#string">String</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>timeoutInterval</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>available</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportsRecurring</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountId</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountSecret</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
</tbody>
</table>

### G_ApplePayPaymentMethod

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>providerName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>fields</strong></td>
<td valign="top">[<a href="#g_paymentmethodfield">G_PaymentMethodField</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>countries</strong></td>
<td valign="top">[<a href="#g_countryenum">G_CountryEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currencies</strong></td>
<td valign="top">[<a href="#g_currencyenum">G_CurrencyEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>refundable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>synonymousMethodNames</strong></td>
<td valign="top">[<a href="#string">String</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>timeoutInterval</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>available</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportsRecurring</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountId</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountSecret</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>merchantId</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportedNetworks</strong></td>
<td valign="top">[<a href="#string">String</a>]!</td>
<td></td>
</tr>
</tbody>
</table>

### G_CardPaymentMethod

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>providerName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>fields</strong></td>
<td valign="top">[<a href="#g_paymentmethodfield">G_PaymentMethodField</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>countries</strong></td>
<td valign="top">[<a href="#g_countryenum">G_CountryEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currencies</strong></td>
<td valign="top">[<a href="#g_currencyenum">G_CurrencyEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>refundable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>synonymousMethodNames</strong></td>
<td valign="top">[<a href="#string">String</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>timeoutInterval</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>available</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportsRecurring</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountId</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountSecret</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportedCards</strong> ⚠️</td>
<td valign="top">[<a href="#g_cardtypeenum">G_CardTypeEnum</a>]!</td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Was used in our internal validation and restrictions, deprecated in favour of passing specific data to payment provider's SDK, use supportedNetworks

</blockquote>
</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportedNetworks</strong></td>
<td valign="top">[<a href="#string">String</a>]!</td>
<td></td>
</tr>
</tbody>
</table>

### G_CardVaultUser

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#g_uuid">G_Uuid</a>!</td>
<td>

Unique vault id to specific payment provider.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>paymentMethod</strong></td>
<td valign="top"><a href="#g_paymentmethodenum">G_PaymentMethodEnum</a>!</td>
<td>

Method of linked vault user

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#g_datetime">G_DateTime</a></td>
<td>

Vault user creation date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>updatedAt</strong></td>
<td valign="top"><a href="#g_datetime">G_DateTime</a></td>
<td>

Vault user updation date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>cardScheme</strong></td>
<td valign="top"><a href="#g_cardschemeenum">G_CardSchemeEnum</a>!</td>
<td>

Payment network linked card scheme

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>last4</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Last 4 number of card

</td>
</tr>
</tbody>
</table>

### G_EmailVaultUser

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#g_uuid">G_Uuid</a>!</td>
<td>

Unique vault id to specific payment provider.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>paymentMethod</strong></td>
<td valign="top"><a href="#g_paymentmethodenum">G_PaymentMethodEnum</a>!</td>
<td>

Method of linked vault user

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#g_datetime">G_DateTime</a></td>
<td>

Vault user creation date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>updatedAt</strong></td>
<td valign="top"><a href="#g_datetime">G_DateTime</a></td>
<td>

Vault user updation date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>email</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Email of linked user

</td>
</tr>
</tbody>
</table>

### G_FieldConstraint

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>options</strong></td>
<td valign="top"><a href="#g_json">G_Json</a>!</td>
<td></td>
</tr>
</tbody>
</table>

### G_GooglePayPaymentMethod

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>providerName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>fields</strong></td>
<td valign="top">[<a href="#g_paymentmethodfield">G_PaymentMethodField</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>countries</strong></td>
<td valign="top">[<a href="#g_countryenum">G_CountryEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currencies</strong></td>
<td valign="top">[<a href="#g_currencyenum">G_CurrencyEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>refundable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>synonymousMethodNames</strong></td>
<td valign="top">[<a href="#string">String</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>timeoutInterval</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>available</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportsRecurring</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountId</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>publicAccountSecret</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>merchantId</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>allowedCardNetworks</strong></td>
<td valign="top">[<a href="#string">String</a>]!</td>
<td></td>
</tr>
</tbody>
</table>

### G_Money

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>amount</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Money amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currency</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Money currency code

</td>
</tr>
</tbody>
</table>

### G_PaymentMethod

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>providerName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>fields</strong></td>
<td valign="top">[<a href="#g_paymentmethodfield">G_PaymentMethodField</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>countries</strong></td>
<td valign="top">[<a href="#g_countryenum">G_CountryEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currencies</strong></td>
<td valign="top">[<a href="#g_currencyenum">G_CurrencyEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>refundable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>synonymousMethodNames</strong></td>
<td valign="top">[<a href="#string">String</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>timeoutInterval</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>available</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportsRecurring</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
</tbody>
</table>

### G_PaymentMethodField

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#g_fieldtypeenum">G_FieldTypeEnum</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>constraints</strong></td>
<td valign="top">[<a href="#g_fieldconstraint">G_FieldConstraint</a>]</td>
<td></td>
</tr>
</tbody>
</table>

### G_RemoveVaultUserResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>success</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
</tbody>
</table>

### P_API_Callback

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#p_uuid">P_Uuid</a>!</td>
<td>

ID of the callback

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#p_api_callbacktypeenum">P_API_CallbackTypeEnum</a>!</td>
<td>

The type of the callback

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>url</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

The URL of the callback

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>authorization</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Bearer authorization value used in the header when calling the URL

</td>
</tr>
</tbody>
</table>

### P_API_CallbackFailureReason

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>reason</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

The code for the failure

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>details</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

The detailed information about the failure

</td>
</tr>
</tbody>
</table>

### P_API_CallbackRequest

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#p_datetime">P_DateTime</a>!</td>
<td>

The time when the callback was created and then made

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>callbackResponse</strong></td>
<td valign="top"><a href="#p_api_callbackresponse">P_API_CallbackResponse</a></td>
<td>

The callback response received from the merchant

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>failureReason</strong></td>
<td valign="top"><a href="#p_api_callbackfailurereason">P_API_CallbackFailureReason</a></td>
<td>

The structured info why the callback has failed

</td>
</tr>
</tbody>
</table>

### P_API_CallbackResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>response</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

The HTTP response body or cURL error

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

The HTTP or cURL status code

</td>
</tr>
</tbody>
</table>

### P_API_CallbackResult

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#p_api_callbackstatusenum">P_API_CallbackStatusEnum</a></td>
<td>

The status of the callback

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#p_api_callbacktypeenum">P_API_CallbackTypeEnum</a>!</td>
<td>

The type of the callback

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>callbackRequests</strong></td>
<td valign="top">[<a href="#p_api_callbackrequest">P_API_CallbackRequest</a>!]!</td>
<td>

The Requests made to the merchant

</td>
</tr>
</tbody>
</table>

### P_API_DeclaredStockResult

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>callbackResults</strong></td>
<td valign="top">[<a href="#p_api_callbackresult">P_API_CallbackResult</a>!]!</td>
<td>

The list of done API callbacks

</td>
</tr>
</tbody>
</table>

### P_API_EnableDeclaredStockResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>success</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isSuccessful</strong> ⚠️</td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use success instead

</blockquote>
</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>failureReason</strong></td>
<td valign="top"><a href="#p_api_declaredstockenablingfailureenum">P_API_DeclaredStockEnablingFailureEnum</a></td>
<td>

The reason why DeclaredStock cannot be enabled

</td>
</tr>
</tbody>
</table>

### P_API_RegisterCallbackResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>success</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isSuccessful</strong> ⚠️</td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use success instead

</blockquote>
</td>
</tr>
</tbody>
</table>

### P_API_RemoveCallbackResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>success</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isSuccessful</strong> ⚠️</td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use success instead

</blockquote>
</td>
</tr>
</tbody>
</table>

### S_API_AddedKey

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the key

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>value</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Value of the key. If key is IMAGE - inline image will be returned

</td>
</tr>
</tbody>
</table>

### S_API_Auction

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>price</strong></td>
<td valign="top"><a href="#s_money">S_Money</a>!</td>
<td>

Current auction price

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">currency</td>
<td valign="top"><a href="#s_availablecurrencytype">S_AvailableCurrencyType</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isInStock</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

Is auction available for purchase

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>merchantName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Auction's merchant name

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>belongsToYou</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

Indicates if this auction belongs to you

</td>
</tr>
</tbody>
</table>

### S_API_AuctionConnection

A connection to a list of items.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>totalCount</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Total connections count

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>totalCountRelation</strong></td>
<td valign="top"><a href="#s_relationenum">S_RelationEnum</a></td>
<td>

Connections count relation

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>pageInfo</strong></td>
<td valign="top"><a href="#s_pageinfo">S_PageInfo</a>!</td>
<td>

Information to aid in pagination.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>edges</strong></td>
<td valign="top">[<a href="#s_api_auctionedge">S_API_AuctionEdge</a>]</td>
<td>

Information to aid in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_AuctionEdge

An edge in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>node</strong></td>
<td valign="top"><a href="#s_api_auction">S_API_Auction</a></td>
<td>

The item at the end of the edge.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>cursor</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

A cursor for use in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_CreateAuctionResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>success</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isSuccessful</strong> ⚠️</td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use success instead

</blockquote>
</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>actionId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

Initiated action ID used to check current state of the action

</td>
</tr>
</tbody>
</table>

### S_API_Key

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the key

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>value</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Value of the key. If key is IMAGE - inline image will be returned

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>orderNumber</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Key purchase order number. If NULL - key is not sold

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>state</strong></td>
<td valign="top"><a href="#s_keystate">S_KeyState</a>!</td>
<td>

Current key state

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a>!</td>
<td>

Key creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>soldAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

Key sale date. If NULL - key is not sold

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>acquisitionPrice</strong></td>
<td valign="top"><a href="#s_money">S_Money</a></td>
<td>

Internal price of the key

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>format</strong></td>
<td valign="top"><a href="#s_keyformat">S_KeyFormat</a></td>
<td>

Key format

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>filename</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Key file name. Only exists when key is IMAGE

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>reportReason</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Report reason. If NULL - key is not reported

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>deletable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

Defines if key can be deleted or not

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>stock</strong></td>
<td valign="top"><a href="#s_api_stock">S_API_Stock</a>!</td>
<td>

Stock associated with that particular key

</td>
</tr>
</tbody>
</table>

### S_API_KeyConnection

A connection to a list of items.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>totalCount</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Total connections count

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>totalCountRelation</strong></td>
<td valign="top"><a href="#s_relationenum">S_RelationEnum</a></td>
<td>

Connections count relation

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>pageInfo</strong></td>
<td valign="top"><a href="#s_pageinfo">S_PageInfo</a>!</td>
<td>

Information to aid in pagination.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>edges</strong></td>
<td valign="top">[<a href="#s_api_keyedge">S_API_KeyEdge</a>]</td>
<td>

Information to aid in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_KeyEdge

An edge in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>node</strong></td>
<td valign="top"><a href="#s_api_key">S_API_Key</a></td>
<td>

The item at the end of the edge.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>cursor</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

A cursor for use in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_PriceUpdateQuota

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>quota</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Available amount of free updates

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>nextFreeIn</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Next free price update recharges in given seconds. If NULL - quota is fully recharged

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>totalFree</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Amount of total free updates

</td>
</tr>
</tbody>
</table>

### S_API_Product

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

Product ID

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Product name

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>slug</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Product slug, used in url

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>platform</strong></td>
<td valign="top"><a href="#s_platformenumvalue">S_PlatformEnumValue</a></td>
<td>

Product platform

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#s_producttypeenumvalue">S_ProductTypeEnumValue</a></td>
<td>

Product type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>releasedAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

Product release date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a>!</td>
<td>

Product creation date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>auctions</strong></td>
<td valign="top"><a href="#s_api_auctionconnection">S_API_AuctionConnection</a></td>
<td>

All available stock for product

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">after</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come after the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">first</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the first n elements from the list

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isSellable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

Indicates if product is available for selling

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>regions</strong></td>
<td valign="top">[<a href="#s_productregion">S_ProductRegion</a>]</td>
<td>

Product regions

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>languages</strong></td>
<td valign="top">[<a href="#string">String</a>!]</td>
<td></td>
</tr>
</tbody>
</table>

### S_API_ProductConnection

A connection to a list of items.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>totalCount</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Total connections count

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>totalCountRelation</strong></td>
<td valign="top"><a href="#s_relationenum">S_RelationEnum</a></td>
<td>

Connections count relation

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>pageInfo</strong></td>
<td valign="top"><a href="#s_pageinfo">S_PageInfo</a>!</td>
<td>

Information to aid in pagination.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>edges</strong></td>
<td valign="top">[<a href="#s_api_productedge">S_API_ProductEdge</a>]</td>
<td>

Information to aid in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_ProductEdge

An edge in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>node</strong></td>
<td valign="top"><a href="#s_api_product">S_API_Product</a></td>
<td>

The item at the end of the edge.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>cursor</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

A cursor for use in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_PurchaseGiftCardsResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>success</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isSuccessful</strong> ⚠️</td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use success instead

</blockquote>
</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>actionId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

Initiated action ID used to check current state of the action

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>batchId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

Gift cards batch ID used to retrieve purchased codes

</td>
</tr>
</tbody>
</table>

### S_API_Sales

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the sale

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>quantity</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Amount of single auction purchase

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>unitPrice</strong></td>
<td valign="top"><a href="#s_money">S_Money</a>!</td>
<td>

Single auction price

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>totalPrice</strong></td>
<td valign="top"><a href="#s_money">S_Money</a>!</td>
<td>

Total price of sale

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>auctionId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the auction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>productId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the product

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a>!</td>
<td>

Sale creation date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>productName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Product name

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>keys</strong></td>
<td valign="top">[<a href="#string">String</a>!]</td>
<td>

Keys sold in this sale

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>keysFileNames</strong></td>
<td valign="top">[<a href="#string">String</a>]</td>
<td>

Sold keys file names, NULL if key is not a file

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>formattedOrderNumber</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Order number associated with this sale

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>orderId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

Order ID associated with this sale

</td>
</tr>
</tbody>
</table>

### S_API_SalesConnection

A connection to a list of items.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>totalCount</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Total connections count

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>totalCountRelation</strong></td>
<td valign="top"><a href="#s_relationenum">S_RelationEnum</a></td>
<td>

Connections count relation

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>pageInfo</strong></td>
<td valign="top"><a href="#s_pageinfo">S_PageInfo</a>!</td>
<td>

Information to aid in pagination.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>edges</strong></td>
<td valign="top">[<a href="#s_api_salesedge">S_API_SalesEdge</a>]</td>
<td>

Information to aid in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_SalesEdge

An edge in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>node</strong></td>
<td valign="top"><a href="#s_api_sales">S_API_Sales</a></td>
<td>

The item at the end of the edge.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>cursor</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

A cursor for use in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_Stock

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the stock

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>product</strong></td>
<td valign="top"><a href="#s_api_product">S_API_Product</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>unitsSold</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Amount of keys sold

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>onHand</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Amount of keys in stock

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>onHold</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Amount of keys on hold

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>declaredStock</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Amount of keys in declared-stock

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#s_api_sellingstatus">S_API_SellingStatus</a>!</td>
<td>

Stock status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>expiresAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a>!</td>
<td>

Stock expiration date and time

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>autoRenew</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>price</strong></td>
<td valign="top"><a href="#s_money">S_Money</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>updatedAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>priceUpdateQuota</strong></td>
<td valign="top"><a href="#s_api_priceupdatequota">S_API_PriceUpdateQuota</a>!</td>
<td>

Price update quota for stock

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>position</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Your auction position for the product

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>positionLabel</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>positionTooltip</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td></td>
</tr>
</tbody>
</table>

### S_API_StockConnection

A connection to a list of items.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>totalCount</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Total connections count

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>totalCountRelation</strong></td>
<td valign="top"><a href="#s_relationenum">S_RelationEnum</a></td>
<td>

Connections count relation

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>pageInfo</strong></td>
<td valign="top"><a href="#s_pageinfo">S_PageInfo</a>!</td>
<td>

Information to aid in pagination.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>edges</strong></td>
<td valign="top">[<a href="#s_api_stockedge">S_API_StockEdge</a>]</td>
<td>

Information to aid in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_StockEdge

An edge in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>node</strong></td>
<td valign="top"><a href="#s_api_stock">S_API_Stock</a></td>
<td>

The item at the end of the edge.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>cursor</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

A cursor for use in pagination.

</td>
</tr>
</tbody>
</table>

### S_API_UpdateAuctionResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>success</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>isSuccessful</strong> ⚠️</td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use success instead

</blockquote>
</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>actionId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a></td>
<td>

Initiated action ID used to check current state of the action

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>addedKeys</strong></td>
<td valign="top">[<a href="#s_api_addedkey">S_API_AddedKey</a>!]</td>
<td>

Pending keys that have been added with current mutation

</td>
</tr>
</tbody>
</table>

### S_Money

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>amount</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Money amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currency</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Money currency code

</td>
</tr>
</tbody>
</table>

### S_PageInfo

Information about pagination in a connection.

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>hasNextPage</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

When paginating forwards, are there more items?

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>hasPreviousPage</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

When paginating backwards, are there more items?

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>startCursor</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

When paginating backwards, the cursor to continue.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>endCursor</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

When paginating forwards, the cursor to continue.

</td>
</tr>
</tbody>
</table>

### S_PlatformEnumValue

Platform enum value object

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>label</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>value</strong></td>
<td valign="top"><a href="#s_platform">S_Platform</a></td>
<td></td>
</tr>
</tbody>
</table>

### S_ProductRegion

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Region name for display

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Code for using in queries

</td>
</tr>
</tbody>
</table>

### S_ProductTypeEnumValue

Product type enum value object

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>label</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>value</strong></td>
<td valign="top"><a href="#s_producttypeenum">S_ProductTypeEnum</a></td>
<td></td>
</tr>
</tbody>
</table>

### T_CountFeeResponse

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>fee</strong></td>
<td valign="top"><a href="#t_money">T_Money</a>!</td>
<td>

Calculated fee

</td>
</tr>
</tbody>
</table>

### T_Money

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>amount</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Money amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currency</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Money currency code

</td>
</tr>
</tbody>
</table>

## Inputs

### G_RemoveVaultUserInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>vaultId</strong></td>
<td valign="top"><a href="#g_uuid">G_Uuid</a>!</td>
<td>

Vault id for specific provider

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>paymentMethod</strong></td>
<td valign="top"><a href="#g_paymentmethodenum">G_PaymentMethodEnum</a>!</td>
<td>

Payment method of vault

</td>
</tr>
</tbody>
</table>

### G_VaultUserInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>paymentReferenceId</strong></td>
<td valign="top"><a href="#g_uuid">G_Uuid</a></td>
<td>

payment reference id to get vault by

</td>
</tr>
</tbody>
</table>

### G_VaultUsersInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>userId</strong></td>
<td valign="top"><a href="#g_uuid">G_Uuid</a></td>
<td>

User id to get vaults by

</td>
</tr>
</tbody>
</table>

### P_API_RegisterCallbackInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#p_api_callbacktypeenum">P_API_CallbackTypeEnum</a>!</td>
<td>

The type of the callback

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>url</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

The URL of the callback

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>authorization</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Bearer authorization value used in the header when calling the URL

</td>
</tr>
</tbody>
</table>

### P_API_RemoveCallbackInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#p_uuid">P_Uuid</a>!</td>
<td>

Callback ID

</td>
</tr>
</tbody>
</table>

### S_API_CreateAuctionInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>keys</strong></td>
<td valign="top">[<a href="#string">String</a>!]</td>
<td>

New text keys. Required if auction is not a preorder

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>enabled</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

The state of auction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>autoRenew</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td>

Should auction be auto renewed

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>productId</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the associated product

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>price</strong></td>
<td valign="top"><a href="#s_moneyinput">S_MoneyInput</a>!</td>
<td>

Auction price

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>acquisitionPrice</strong></td>
<td valign="top"><a href="#s_moneyinput">S_MoneyInput</a></td>
<td>

Keys acquisition price. Used for profit calculations

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>onHand</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Keys counter for pre-order

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>lowStockNotificationEnabled</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

Whether to send email notifications when auction is running low on stock

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>priceChangeNotificationEnabled</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

Whether to send email notifications when auction price is not the lowest one

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>declaredStock</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Tells how many keys are available by the "Declared Stock" feature

</td>
</tr>
</tbody>
</table>

### S_API_PurchaseGiftCardsInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>denomination</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Gift card denomination in EURO cents

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>quantity</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Amount of gift cards to purchase

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currency</strong></td>
<td valign="top"><a href="#s_giftcardcurrencytype">S_GiftCardCurrencyType</a></td>
<td>

Gift card currency, default EUR, available EUR, USD, GBP, PLN, AUD, CAD, CLP, ARS, BRL

</td>
</tr>
</tbody>
</table>

### S_API_StockFilters

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>enabled</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

The state of auction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#s_datetimerangeinput">S_DateTimeRangeInput</a></td>
<td>

Filter values by created date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>updatedAt</strong></td>
<td valign="top"><a href="#s_datetimerangeinput">S_DateTimeRangeInput</a></td>
<td>

Filter values by update date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>price</strong></td>
<td valign="top"><a href="#s_moneyrangeinput">S_MoneyRangeInput</a></td>
<td>

Filter values by price

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>sort</strong></td>
<td valign="top"><a href="#s_api_stockfilterssortenum">S_API_StockFiltersSortEnum</a></td>
<td>

Sort values

</td>
</tr>
</tbody>
</table>

### S_API_UpdateAuctionInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the auction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>price</strong></td>
<td valign="top"><a href="#s_moneyinput">S_MoneyInput</a></td>
<td>

Auction price

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>addedKeys</strong></td>
<td valign="top">[<a href="#string">String</a>!]</td>
<td>

Added keys in plain (text) format

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>acquisitionPrice</strong></td>
<td valign="top"><a href="#s_moneyinput">S_MoneyInput</a></td>
<td>

Keys acquisition price. Used for profit calculations

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>removedKeys</strong></td>
<td valign="top">[<a href="#s_uuid">S_Uuid</a>!]</td>
<td>

IDs of removed keys

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>enabled</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

The state of auction. Leave this field empty if not updating it.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>autoRenew</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

Should auction be auto renewed. Leave this field empty if not updating it.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>lowStockNotificationEnabled</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

Whether to send email notifications when auction is running low on stock

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>priceChangeNotificationEnabled</strong></td>
<td valign="top"><a href="#boolean">Boolean</a></td>
<td>

Whether to send email notifications when auction price is not the lowest one

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>declaredStock</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Tells how many keys are available by the "Declared Stock" feature

</td>
</tr>
</tbody>
</table>

### S_DateTimeRangeInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>from</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

From DateTime value

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>to</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a></td>
<td>

To DateTime value

</td>
</tr>
</tbody>
</table>

### S_MoneyInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>amount</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td>

Money amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currency</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td>

Money currency code

</td>
</tr>
</tbody>
</table>

### S_MoneyRangeInput

<table>
<thead>
<tr>
<th colspan="2" align="left">Field</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>from</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

From money amount value

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>to</strong></td>
<td valign="top"><a href="#int">Int</a></td>
<td>

To money amount value

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currency</strong></td>
<td valign="top"><a href="#s_availablecurrencytype">S_AvailableCurrencyType</a></td>
<td>

Money range currency code

</td>
</tr>
</tbody>
</table>

## Enums

### A_ActionStateEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>NEW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>COMPLETED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FAILED</strong></td>
<td></td>
</tr>
</tbody>
</table>

### B_API_TransactionsSort

Transactions sorting options

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>CREATED_AT_ASC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CREATED_AT_DESC</strong></td>
<td></td>
</tr>
</tbody>
</table>

### B_DirectionEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>IN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OUT</strong></td>
<td></td>
</tr>
</tbody>
</table>

### B_FeeType

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>AUCTION_NEW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_EDIT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_RENEW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_CAMPAIGN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_UNFULFILLED_SALE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WALLET_WITHDRAW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WALLET_CONVERSION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FUNDS_RELEASE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DELIVERY_AUTHORIZATION_REJECT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DORMANT_ACCOUNT</strong></td>
<td></td>
</tr>
</tbody>
</table>

### B_TransactionStatus

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>PENDING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ON_HOLD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CANCELED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>COMPLETE</strong></td>
<td></td>
</tr>
</tbody>
</table>

### B_TransactionType

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>DEPOSIT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WITHDRAW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PURCHASE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PURCHASE_WALLET_PORTION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GIFT_CARDS_PURCHASE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EXCHANGE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SALE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AFFILIATE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AFFILIATE_PAYOUT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FEE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEW_AUCTION_FEE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_EDIT_FEE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_RENEW_FEE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_UNFULFILLED_SALE_FEE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FUNDS_RELEASE_FEE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_CAMPAIGN_FEE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ADMIN_MANUAL_FUNDS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PARTIAL_ITEM_REFUND</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SUBSCRIPTION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ADMIN_SALE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ADMIN_SALE_PARTIAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ADMIN_GOODWILL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ADMIN_GOODWILL_WITHDRAWABLE</strong></td>
<td></td>
</tr>
</tbody>
</table>

### G_CardSchemeEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>UNKNOWN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VISA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MASTERCARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VISA_ELECTRON</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MAESTRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DISCOVER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>JCB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DINERS_CLUB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DINERS_CLUB_INTERNATIONAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AMERICAN_EXPRESS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MADA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UNION_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RUPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>INTER_PAYMENT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>INSTA_PAYMENT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MIR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NPS_PMR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VERVE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LANKA_PAY</strong></td>
<td></td>
</tr>
</tbody>
</table>

### G_CardTypeEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>VISA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MASTERCARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VISA_ELECTRON</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MAESTRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DISCOVER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>JCB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DINERS_CLUB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DINERS_CLUB_INTERNATIONAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AMERICAN_EXPRESS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UNION_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RU_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>INTER_PAYMENT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>INSTA_PAYMENT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MIR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NPS_PMR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VERVE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LANKA_PAY</strong></td>
<td></td>
</tr>
</tbody>
</table>

### G_CodeState

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>AVAILABLE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RESERVED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>USED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DISABLED</strong></td>
<td></td>
</tr>
</tbody>
</table>

### G_CountryEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>AF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BJ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DJ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FJ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ID</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>JM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>JP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>JE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>JO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>XK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ML</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>YT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ME</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>QA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ST</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ZA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ES</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SJ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TJ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>US</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>YE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ZM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ZW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>XX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>T1</strong></td>
<td></td>
</tr>
</tbody>
</table>

### G_CurrencyEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>HUF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RON</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NZD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NOK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ILS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SAR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ARS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CRC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TRY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UYU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BRL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EUR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MXN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PLN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RUB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UAH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CHF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CLP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>COP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>USD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GBP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CZK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DKK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SEK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAD</strong></td>
<td></td>
</tr>
</tbody>
</table>

### G_FieldTypeEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>STRING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UUID</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MONEY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EMAIL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SWIFT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LUHN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DATE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CVC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOOLEAN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PSD2DATA</strong></td>
<td></td>
</tr>
</tbody>
</table>

### G_PaymentMethodEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>SYSTEM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GIFT_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BITBAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VISA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AMERICAN_EXPRESS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ITAU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BRADESCO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MULTIBANCO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSHOP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DINERS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AURA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OXXO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANAMEX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SANTANDER_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SAFETYPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MASTER_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOLETO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VISA_ELECTRON</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAIXA_ECONOMICA_FEDERAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BACO_DO_BRASIL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOACOMPRA_GOLD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BONCO_DO_BRASIL_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ITAU_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SANTANDER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSAFE_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TODITO_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAGSEGURO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ELO_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HIPER_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PERSONAL_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BRADESCO_TRANSF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MASTER_CARD_MAESTRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BAPRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCOMER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SEVEN_ELEVEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SCOTIABANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>COBRO_EXPRESS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAGO_FACIL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RAPI_PAGO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAGO_EFECTIVO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>THREE_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PSE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BALOTO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BCP_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WESTERN_UNION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_DE_CREDITO_BCP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAJA_AREQUIPA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAJA_PIURA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PIN_VALIDDA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EFECTY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EXITO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SAFETY_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANRISUL_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_NACIONAL_DE_COSTA_RICA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_POPULAR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_PROMERICA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CATHAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_LAFISE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANORTE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BBVA_CONTINENTAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>INTERBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_DAVIVIENDA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_DE_BOGOTA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_DE_OCCIDENTE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AVVILAS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BBVA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAJA_TRUJILLO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAJA_HUANCAYO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAJA_CUSCO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAJA_ICA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAJA_TACNA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IS_BANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AKBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>YAPI_KREDI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HALKBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FINANSBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PTT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SPEI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SANTANDER_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TURK_TELECOM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TURKCELL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VODAFONE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CARNET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DEL_AHORRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BENAVIDES</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EXTRA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WALDOS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KIOSKO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EL_ASTURIANO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CIRCULO_K</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MAMBO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CMR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CENCOSUD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RIPLEY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MAGNA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>REDCOMPRA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SERVIPAG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GANA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PARIS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>JUMBO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EASY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANORTE_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BBVA_BANCOMER_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SCOTIABANK_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GRUPO_MUCAP_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GRUPO_MUTUAL_ALAJUELA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_CATHAY_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_PROMERICA_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_LAFISE_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_POPULAR_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>B_NACIONAL_DE_COSTA_RICA_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GRUPO_MUCAP_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GRUPO_MUTUAL_ALAJUELA_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TELEDOLAR_MN_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KUVEYT_TURK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VAKIF_BANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ZIRAAT_BANKASI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TEB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CUENTA_DIGITAL_SALDO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VOUCHER_DIGITAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NARANJA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ARGEN_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CABAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TARJETA_SHOPPING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NATIVA_MASTER_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CITI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GALICIA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MACRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LINK_PAGOS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MULTICAJA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WEB_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BAN_BIF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KAS_NET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FULL_CARGA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CORREOS_DE_COSTA_RICA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OCA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LIDER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>REDPAGOS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KHIPU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCOLOMBIA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCOLOMBIA_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BBVA_COLOMBIA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANBIF_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_BR_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_BR_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_BR_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_BR_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_MX_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_MX_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_MX_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_MX_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_AR_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_AR_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_AR_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_AR_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CL_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CL_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CL_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CL_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CO_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CO_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CO_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CO_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CR_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CR_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CR_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_CR_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_GQ_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_GQ_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_GQ_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_GQ_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PE_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PE_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PE_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PE_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PT_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PT_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PT_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_PT_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_TR_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_TR_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_TR_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_TR_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_UY_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_UY_CASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_UY_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOA_UY_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOKU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BRAINTREE_PAYPAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CHECKOUT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CHECKOUT_CB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CHECKOUT_AMEX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CHECKOUT_JCB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CHECKOUT_GOOGLE_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CHECKOUT_APPLE_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GOOGLE_PAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CREDORAX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_CREDIT_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_OXXO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_WEBPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_SPEI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_BBVA_BANCOMER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_BANORTE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_SANTANDER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_SERVIPAG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_PAGOFACIL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_RAPIPAGO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_EFECTY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_PSE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_BOLETO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_PAGO_EFECTIVO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_RED_PAGOS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLOCAL_PIX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>THREE_XCB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>THREE_XCB_NO_FEES</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FOUR_XCB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FOUR_XCB_NO_FEES</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ALIPAY_POS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCO_DO_BRASIL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANCONTACTQRCODE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BANK_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BBVA_BANCOMER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BCMC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BCMC_MOBILE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BNPP_3XCB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BNPP_4XCB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOLETO_BANCARIO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CAIXA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CARTE_ACCORD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CARTE_CADEAU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CARTE_TITRE_RESTAURANT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CBC_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>COFINOGA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CREDIT_LONG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DCB_CH_EASYPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DEXIA_DIRECTNET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DIVIDO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ELO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EPS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GIROPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IDEAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ING_HOMEPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KBC_ONLINE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KLARNACHECKOUT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KLARNAINVOICE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MAESTRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MASTERCARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MYBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYPAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSAFECARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYULATAM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POSTFINANCE_CARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POSTFINANCE_EFINANCE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PRZELEWY24</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>QIWI_WALLET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SANTANDER_HOME_BANKING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SCT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SDD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SISAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SKRILL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SOFORT_UBERWEISUNG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TPE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TRUSTPAY_BANKING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UNIONPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WEBMONEY_TRANSFER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>YANDEX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SWEDBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SEB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_CITADELE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_LUMINOR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_REVOLUT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_PAYSERA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_INGBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_ALANDSBANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_DANSKEBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_NORDEA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_HANDELSBANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SIAULIUBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_MEDICINOSBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_NEOFINANCE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_LKU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_RATO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_KREDA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_RIETUMU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_LHV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_COOP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_ABN_AMRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_RABOBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_VAN_LANSCHOT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_ASNBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_KNAB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_REGIOBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SNSBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_TRIODOSBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_BUNQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_DNB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_PKOBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_MBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_BNP_PARIBAS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SANTANDER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_MILLENNIUM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_INTELIGO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_NESTBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_IDEABANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_BANK_PEKAO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_ALIORBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_POP_PANKKI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SAASTO_PANKKI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_OMASP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_S_PANKKI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_OP_BANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_AKTIA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SPARE_BANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_SPAREBANKEN_VEST</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOPAY_S_BANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_BLIK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_PRZELEWY24</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_PAYSAFECARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_NEOSURF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_SOFORT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_BANCONTACT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_GIROPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_MULTIBANCO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NUVEI_WECHAT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEOSURF</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OBUCKS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OBUCKS_CA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AKTIA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ALANDSBANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ALIOR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ALLIANZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BARCODE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BLIK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BOS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BZ_WBK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CESSPORSTD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CITI_HANDLOWY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CREDIT_AGRICOLE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CSOB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DANSKEBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DEUTSCHE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DNB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EQUABANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EUROBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FIOBANKA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GEMONEYBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GETIN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GF_LEASING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HANDELSBANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IDEA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>INTELIGO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>KREDIIDI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LANSFORSAKRINGAR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LHV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LKU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LTHAND</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LUMINOR_DNB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LUMINOR_NORDEA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MAXIMA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MILLENNIUM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MOJEBANKA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MOKILIZINGAS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MOQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NEST</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NOBLE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NORDEA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OMASP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAREX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PARIBAS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PBS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PEKAO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PERLAS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PKO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PLUS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POCZTOWY24</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POHJOLA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POPPANKKI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POST</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POSTBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POSTOVABANKA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PPRO_EPS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PPRO_POLI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RAIFFEISEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RAIFFEISENBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>S_PANKKI</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SAMPO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SEB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SGB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SGEB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SIIRTO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SKANDIABANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SKYCASH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SLOVSPOR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SPARBANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SWEDBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TATRABANKA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TMOBILE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TOYOTA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TRUSTPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UBB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UNICREDIT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VOLKSWAGEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>VUBBANKA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WEBMONEY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ZABKA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SMSBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_PAYSERA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_N26</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SAFETYPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SAFETYPAY_SYSTEM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_UNICREDIT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_TRUSTLY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_INGBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_MBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_REVOLUT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_TRIODOS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_ABN_AMRO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_PROCREDIT_BANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_ALLIANZ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_UBB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_ZIRAAT_BANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_RAIFFEISEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SWEDBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_LUMINOR</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_CITADELE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SEB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_COOP</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_LHV</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_HANDELSBANKEN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_NORDEA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_GIROPAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_MAXIMA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_PAYPOST</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_PERLAS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_MEDICINOSBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_LKU</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SIAULIUBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_GENERAL_FINANCING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_RABOBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_ASNBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_REGIOBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SNSBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_IDEAL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_BLIK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_BNP_PARIBAS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_IDEABANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_NESTBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_ALIORBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_PKOBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_BANK_PEKAO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SANTANDER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_INTESA_SANPAOLO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_OPENBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SELFBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_ANDBANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_WIZINK_BANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_BBVA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_KUTXABANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_SABADELL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PAYSERA_CAIXABANK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>P24</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>P24_BLIK</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TRUSTLY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TRUSTLY_IDEAL</strong></td>
<td></td>
</tr>
</tbody>
</table>

### P_API_CallbackStatusEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>NEW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>READY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SENT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>FAILED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>RETRYING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>COMPLETED</strong></td>
<td></td>
</tr>
</tbody>
</table>

### P_API_CallbackTypeEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>DECLARED_STOCK_RESERVATION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DECLARED_STOCK_PROVISION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DECLARED_STOCK_CANCELLATION</strong></td>
<td></td>
</tr>
</tbody>
</table>

### P_API_DeclaredStockEnablingFailureEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>NO_RESERVATION_FOUND</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NO_PROVISION_FOUND</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LAST_RESERVATION_NOT_SUCCESSFUL</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LAST_PROVISION_NOT_SUCCESSFUL</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_API_KeysSort

Keys sorting options

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>STATE_ASC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>STATE_DESC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CREATED_AT_ASC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CREATED_AT_DESC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SOLD_AT_ASC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SOLD_AT_DESC</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_API_ProductsSort

Products sorting options

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>CREATED_AT_ASC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CREATED_AT_DESC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>POPULARITY_DESC</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_API_SellingStatus

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>ACTIVE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>INACTIVE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>CONFIRMATION_PENDING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>REJECTED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DISABLED</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_API_StockFiltersSortEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>CREATED_AT_DESC</strong></td>
<td>

Sort by created at in descending order

</td>
</tr>
<tr>
<td valign="top"><strong>CREATED_AT_ASC</strong></td>
<td>

Sort by created at in ascending order

</td>
</tr>
<tr>
<td valign="top"><strong>UPDATED_AT_DESC</strong></td>
<td>

Sort by updated at in descending order

</td>
</tr>
<tr>
<td valign="top"><strong>UPDATED_AT_ASC</strong></td>
<td>

Sort by created at in ascending order

</td>
</tr>
<tr>
<td valign="top"><strong>PRICE_DESC</strong></td>
<td>

Sort by price in descending order

</td>
</tr>
<tr>
<td valign="top"><strong>PRICE_ASC</strong></td>
<td>

Sort by price in ascending order

</td>
</tr>
</tbody>
</table>

### S_KeyFormat

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>TEXT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>IMAGE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PHYSICAL</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_KeyState

Sellable item types in marketplace

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>PRE_ORDERED</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SOLD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PENDING</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ACTIVE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>REPORTED</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_Platform

Available platforms in marketplace

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>STEAM</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>XBOX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PSN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>APPLE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BLIZZARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>UPLAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GOG</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NINTENDO</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ORIGIN</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OTHER</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ROCKSTAR_SOCIAL_CLUB</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>EPIC_GAMES</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>BETHESDA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GOOGLE_PLAY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>MOG_STATION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ARENA_NET</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AMAZON</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NETFLIX</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SPOTIFY</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>ESEA</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AXESO5</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>OPSKINS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>HELLCASE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>PLAYSTATION_4</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>XBOX_ONE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>NINTENDO_SWITCH</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WINDOWS_STORE</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_ProductTypeEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>GAME</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GIFTCARD</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GAME_POINTS</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>DLC</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SOFTWARE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>SUBSCRIPTION</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>TOP_UP</strong></td>
<td></td>
</tr>
</tbody>
</table>

### S_RelationEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>EQ</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>LTE</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>GTE</strong></td>
<td></td>
</tr>
</tbody>
</table>

### T_FeeTypeEnum

<table>
<thead>
<th align="left">Value</th>
<th align="left">Description</th>
</thead>
<tbody>
<tr>
<td valign="top"><strong>AUCTION_NEW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_EDIT</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_RENEW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>WALLET_WITHDRAW</strong></td>
<td></td>
</tr>
<tr>
<td valign="top"><strong>AUCTION_PRICE_UPDATE</strong></td>
<td></td>
</tr>
</tbody>
</table>

## Scalars

### A_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### B_Currency

Refers to money in any form

### B_DateTime

Holds date time value

### B_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### Boolean

The `Boolean` scalar type represents `true` or `false`.

### Float

The `Float` scalar type represents signed double-precision fractional values as specified by [IEEE 754](https://en.wikipedia.org/wiki/IEEE_floating_point).

### G_DateTime

Holds date time value

### G_Json

Represents valid json string.

### G_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### Int

The `Int` scalar type represents non-fractional signed whole numeric values. Int can represent values between -(2^31) and 2^31 - 1.

### P_DateTime

Holds date time value

### P_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### S_AvailableCurrencyType

### S_DateTime

Holds date time value

### S_GiftCardCurrencyType

### S_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### String

The `String` scalar type represents textual data, represented as UTF-8 character sequences. The String type is most often used by GraphQL to represent free-form human-readable text.

### T_AvailableCurrencyType


## Interfaces


### B_API_TransactionInterface

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>code</strong></td>
<td valign="top"><a href="#string">String</a></td>
<td>

Shorter and unique transaction identifier

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>type</strong></td>
<td valign="top"><a href="#b_transactiontype">B_TransactionType</a></td>
<td>

Transaction type

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>status</strong></td>
<td valign="top"><a href="#b_transactionstatus">B_TransactionStatus</a></td>
<td>

Transaction status

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>direction</strong></td>
<td valign="top"><a href="#b_directionenum">B_DirectionEnum</a></td>
<td>

Transaction direction

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>money</strong></td>
<td valign="top"><a href="#b_money">B_Money</a></td>
<td>

Transaction amount

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertingTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is reverting current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>revertedTransaction</strong></td>
<td valign="top"><a href="#b_api_transactioninterface">B_API_TransactionInterface</a></td>
<td>

Transaction which is being reverted by current transaction.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#b_datetime">B_DateTime</a></td>
<td>

Transaction creation date and time

</td>
</tr>
</tbody>
</table>

### G_PaymentMethodInterface

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>name</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>providerName</strong></td>
<td valign="top"><a href="#string">String</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>fields</strong></td>
<td valign="top">[<a href="#g_paymentmethodfield">G_PaymentMethodField</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>countries</strong></td>
<td valign="top">[<a href="#g_countryenum">G_CountryEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>currencies</strong></td>
<td valign="top">[<a href="#g_currencyenum">G_CurrencyEnum</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>refundable</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>synonymousMethodNames</strong></td>
<td valign="top">[<a href="#string">String</a>!]!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>timeoutInterval</strong></td>
<td valign="top"><a href="#int">Int</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>available</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>supportsRecurring</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
</tr>
</tbody>
</table>

### G_VaultUserInterface

<table>
<thead>
<tr>
<th align="left">Field</th>
<th align="right">Argument</th>
<th align="left">Type</th>
<th align="left">Description</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="2" valign="top"><strong>id</strong></td>
<td valign="top"><a href="#g_uuid">G_Uuid</a>!</td>
<td>

Unique vault id to specific payment provider.

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>paymentMethod</strong></td>
<td valign="top"><a href="#g_paymentmethodenum">G_PaymentMethodEnum</a>!</td>
<td>

Method of linked vault user

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>createdAt</strong></td>
<td valign="top"><a href="#g_datetime">G_DateTime</a></td>
<td>

Vault user creation date

</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>updatedAt</strong></td>
<td valign="top"><a href="#g_datetime">G_DateTime</a></td>
<td>

Vault user updation date

</td>
</tr>
</tbody>
</table>
