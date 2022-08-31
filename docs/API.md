# Schema Types

<details>
  <summary><strong>Table of Contents</strong></summary>

  * [Query](#query)
  * [Mutation](#mutation)
  * [Objects](#objects)
    * [A_Action](#a_action)
    * [B_API_AdminManualFundsTransaction](#b_api_adminmanualfundstransaction)
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
    * [B_API_SaleTransaction](#b_api_saletransaction)
    * [B_API_TransactionConnection](#b_api_transactionconnection)
    * [B_API_TransactionEdge](#b_api_transactionedge)
    * [B_API_WithdrawTransaction](#b_api_withdrawtransaction)
    * [B_Money](#b_money)
    * [B_PageInfo](#b_pageinfo)
    * [G_API_GiftCardCode](#g_api_giftcardcode)
    * [G_Money](#g_money)
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
    * [P_API_RegisterCallbackInput](#p_api_registercallbackinput)
    * [P_API_RemoveCallbackInput](#p_api_removecallbackinput)
    * [S_API_CreateAuctionInput](#s_api_createauctioninput)
    * [S_API_PurchaseGiftCardsInput](#s_api_purchasegiftcardsinput)
    * [S_API_UpdateAuctionInput](#s_api_updateauctioninput)
    * [S_MoneyInput](#s_moneyinput)
  * [Enums](#enums)
    * [A_ActionStateEnum](#a_actionstateenum)
    * [B_API_TransactionsSort](#b_api_transactionssort)
    * [B_DirectionEnum](#b_directionenum)
    * [B_FeeType](#b_feetype)
    * [B_TransactionStatus](#b_transactionstatus)
    * [B_TransactionType](#b_transactiontype)
    * [G_CodeState](#g_codestate)
    * [P_API_CallbackStatusEnum](#p_api_callbackstatusenum)
    * [P_API_CallbackTypeEnum](#p_api_callbacktypeenum)
    * [P_API_DeclaredStockEnablingFailureEnum](#p_api_declaredstockenablingfailureenum)
    * [S_API_KeysSort](#s_api_keyssort)
    * [S_API_ProductsSort](#s_api_productssort)
    * [S_API_SellingStatus](#s_api_sellingstatus)
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
    * [G_Uuid](#g_uuid)
    * [Int](#int)
    * [P_DateTime](#p_datetime)
    * [P_Uuid](#p_uuid)
    * [S_AvailableCurrencyType](#s_availablecurrencytype)
    * [S_DateTime](#s_datetime)
    * [S_Uuid](#s_uuid)
    * [String](#string)
    * [T_AvailableCurrencyType](#t_availablecurrencytype)
  * [Interfaces](#interfaces)
    * [B_API_TransactionInterface](#b_api_transactioninterface)

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
<td valign="top"><a href="#int">S_GiftCardCurrencyType</a></td>
<td>

Gift card currency, default EUR, available EUR, USD, GBP, PLN, AUD, CAD, CLP, ARS, BRL

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

### S_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### String

The `String` scalar type represents textual data, represented as UTF-8 character sequences. The String type is most often used by GraphQL to represent free-form human-readable text.

### T_AvailableCurrencyType

### S_GiftCardCurrencyType

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
