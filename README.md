# Battleships

 - [Intro](#intro)
 - [Development](#development)
 - [Docs](#docs)

## Intro

Battleships API is a service for creating multiplayer online battleships games.

## Development

Clone this repo and install dependencies with:

`composer install`

then run the development server with:

`composer dev`

## Docs

### Index

 - [Create Game](#create-game)

### Create Game

  Create and join a new game. Return an invitation so another player can join.

* **URL**

  `/games`

* **Method:**

  `Post`

* **Data Params**

  * **name** `string` *The name of the player that is creating the game.*

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** `{ code : "some_weird_cuid" }`

* **Error Response:**

  * **Code:** 400 BAD REQUEST <br />
    **Content:** `{ error : "Missing player name." }`

[Back to index](#index)
