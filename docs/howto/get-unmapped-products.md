# How to get all unmapped products

## To get all unmapped products use `S_products` query with `onlyUnmapped` argument

By providing `onlyUnmapped: true` you will receive only those products which are not currently mapped by you (you don't have stock for these products). 

Request:
```
{
  S_products(onlyUnmapped: true, first: 10) {
    totalCount
    pageInfo {
      hasNextPage
      hasPreviousPage
      startCursor
      endCursor
    }
    edges {
      node {
        id
        name
        slug
      }
      cursor
    }
  }
}

```

Response:
```json
{
  "data": {
    "S_products": {
      "totalCount": 12592,
      "pageInfo": {
        "hasNextPage": false,
        "hasPreviousPage": false,
        "startCursor": "YXJyYXljb25uZWN0aW9uOjA=",
        "endCursor": "YXJyYXljb25uZWN0aW9uOjc="
      },
      "edges": [
        {
          "node": {
            "id": "f429a6b4-bdd3-11e9-a1fd-067cfd57af9d",
            "name": "Blade & Bones Steam Key GLOBAL",
            "slug": "steam-blade-bones-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjA="
        },
        {
          "node": {
            "id": "75b25d44-be91-11e9-98c1-f6017fbc134e",
            "name": "SOLITUNE Steam Key GLOBAL",
            "slug": "steam-solitune-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjE="
        },
        {
          "node": {
            "id": "6e695558-e126-11e9-a51b-266220a3a846",
            "name": "Chef Solitaire: USA Steam Key GLOBAL",
            "slug": "steam-chef-solitaire-usa-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjI="
        },
        {
          "node": {
            "id": "c0104c28-e8d2-11e9-a177-6e80a2a74f8f",
            "name": "Carrotting Brain Steam Key GLOBAL",
            "slug": "steam-carrotting-brain-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjM="
        },
        {
          "node": {
            "id": "332324d6-d610-11e9-954d-4af17fa76ff7",
            "name": "Edgar Steam Key GLOBAL",
            "slug": "steam-edgar-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjQ="
        },
        {
          "node": {
            "id": "8d8fd40c-90e0-11e9-a3f4-a26ed9942b00",
            "name": "Northern Tale 2 Steam Key GLOBAL",
            "slug": "steam-northern-tale-2-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjU="
        },
        {
          "node": {
            "id": "fdb71532-ad3d-11e9-a95c-36e959a73b35",
            "name": "The Last Rolling Hero Steam Key GLOBAL",
            "slug": "steam-the-last-rolling-hero-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjY="
        },
        {
          "node": {
            "id": "455fdbec-c8a2-11e9-ae2b-72086bec5a48",
            "name": "Lethal Brutal Racing Steam Key GLOBAL",
            "slug": "steam-lethal-brutal-racing-steam-key-global"
          },
          "cursor": "YXJyYXljb25uZWN0aW9uOjc="
        }
      ]
    }
  }
}
```
