# Eneba GraphQL - Schema Types

<details>
  <summary><strong>Table of Contents</strong></summary>

  * [Query](#query)
  * [Mutation](#mutation)
  * [Objects](#objects)
    * [A_Action](#a_action)
    * [G_API_GiftCardCode](#g_api_giftcardcode)
    * [G_Money](#g_money)
    * [S_API_Auction](#s_api_auction)
    * [S_API_AuctionConnection](#s_api_auctionconnection)
    * [S_API_AuctionEdge](#s_api_auctionedge)
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
    * [T_CountFeeResponse](#t_countfeeresponse)
    * [T_Money](#t_money)
  * [Inputs](#inputs)
    * [S_API_PurchaseGiftCardsInput](#s_api_purchasegiftcardsinput)
    * [S_API_UpdateAuctionInput](#s_api_updateauctioninput)
    * [S_MoneyInput](#s_moneyinput)
  * [Enums](#enums)
    * [A_ActionStateEnum](#a_actionstateenum)
    * [G_CodeState](#g_codestate)
    * [S_API_SellingStatus](#s_api_sellingstatus)
    * [S_KeyFormat](#s_keyformat)
    * [S_KeyState](#s_keystate)
    * [S_Platform](#s_platform)
    * [T_FeeTypeEnum](#t_feetypeenum)
  * [Scalars](#scalars)
    * [A_Uuid](#a_uuid)
    * [Boolean](#boolean)
    * [G_Uuid](#g_uuid)
    * [Int](#int)
    * [S_AvailableCurrencyType](#s_availablecurrencytype)
    * [S_DateTime](#s_datetime)
    * [S_Uuid](#s_uuid)
    * [String](#string)
    * [T_AvailableCurrencyType](#t_availablecurrencytype)

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
<td colspan="2" align="right" valign="top">before</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come before the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">last</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the last n elements from the list

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
<td valign="top"><a href="#s_uuid">S_Uuid</a>!</td>
<td>

The ID of the stock item

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
<td colspan="2" align="right" valign="top">before</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come before the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">last</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the last n elements from the list

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
<td colspan="2" align="right" valign="top">before</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come before the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">last</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the last n elements from the list

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
<td colspan="2" valign="top"><strong>releasedAt</strong></td>
<td valign="top"><a href="#s_datetime">S_DateTime</a>!</td>
<td>

Product release date

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
<td colspan="2" align="right" valign="top">before</td>
<td valign="top"><a href="#string">String</a></td>
<td>

Returns the elements that come before the specified cursor

</td>
</tr>
<tr>
<td colspan="2" align="right" valign="top">last</td>
<td valign="top"><a href="#int">Int</a></td>
<td>

Returns up to the last n elements from the list

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
<td colspan="2" valign="top"><strong>isSuccessful</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
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
<td colspan="2" valign="top"><strong>isSuccessful</strong></td>
<td valign="top"><a href="#boolean">Boolean</a>!</td>
<td></td>
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
<tr>
<td colspan="2" valign="top"><strong>name</strong> ⚠️</td>
<td valign="top"><a href="#string">String</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use label instead

</blockquote>
</td>
</tr>
<tr>
<td colspan="2" valign="top"><strong>enum</strong> ⚠️</td>
<td valign="top"><a href="#s_platform">S_Platform</a></td>
<td>
<p>⚠️ <strong>DEPRECATED</strong></p>
<blockquote>

Use value instead

</blockquote>
</td>
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
<td colspan="2" valign="top"><strong>removedKeys</strong></td>
<td valign="top">[<a href="#s_uuid">S_Uuid</a>!]</td>
<td>

IDs of removed keys

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

### Boolean

The `Boolean` scalar type represents `true` or `false`.

### G_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### Int

The `Int` scalar type represents non-fractional signed whole numeric values. Int can represent values between -(2^31) and 2^31 - 1.

### S_AvailableCurrencyType

### S_DateTime

Holds date time value

### S_Uuid

Uuid value in hex, formatted 8-4-4-4-12

### String

The `String` scalar type represents textual data, represented as UTF-8 character sequences. The String type is most often used by GraphQL to represent free-form human-readable text.

### T_AvailableCurrencyType

