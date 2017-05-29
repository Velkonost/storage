<?php

use yii\helpers\Html;

?>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <a href="https://sport-form.ru/" target="_blank"><img src="img/logo.png" alt="logo"></a>
            </div>
            <div class="center">
                <h1>Склад</h1>
                <button name="button" id="add">Добавить товар</button>

            </div>
            <div class="exit">
                <span>Выход</span>
                <img src="img/exit.png" alt="exit">
            </div>
        </div>
        <div class="clear"></div>


        <!--tableRussia-->
        <div class="container">
            <div class="table-title" id="headRu">
                <span class="country">Россия</span>
                <div class="warhouse"><span class="sklad">42</span>
                    <span class="reserv">(7)</span></div>
            </div>
            <div class="table-wrap" id="tableRussia">
                <table class="Russia">
                    <thead>
                        <tr>
                            <td><span>Название</span></td>
                            <td>S</td>
                            <td>M</td>
                            <td>L</td>
                            <td>XL</td>
                            <td>XXL</td>
                            <td>XXXL</td>
                            <td>к-во</td>
                            <td>цена</td>
                        </tr>
                    </thead>
                    <tbody>
                       <!--  -->
                    </tbody>
                </table>
            </div>

            <!--tableCCCP-->

            <div class="table-title" id="headCccp">
                <span class="country">СССР</span>
                <div class="warhouse"><span class="sklad">21</span>
                    <span class="reserv">(4)</span></div>
            </div>
            <div class="table-wrap" id="tableCccp">
                <table class="Russia">
                    <thead>
                        <tr>
                            <td><span>Название</span></td>
                            <td>S</td>
                            <td>M</td>
                            <td>L</td>
                            <td>XL</td>
                            <td>XXL</td>
                            <td>XXXL</td>
                            <td>к-во</td>
                            <td>цена</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  -->
                    </tbody>
                </table>
            </div>

            <!--tableОлимпиада-->

            <div class="table-title" id="headOlimp">
                <span class="country">Олимпиада 80</span>
                <div class="warhouse"><span class="sklad">21</span>
                    <span class="reserv">(4)</span></div>
            </div>
            <div class="table-wrap" id="tableOlimpiada">
                <table class="Russia">
                    <thead>
                        <tr>
                            <td><span>Название</span></td>
                            <td>S</td>
                            <td>M</td>
                            <td>L</td>
                            <td>XL</td>
                            <td>XXL</td>
                            <td>XXXL</td>
                            <td>к-во</td>
                            <td>цена</td>
                        </tr>
                    </thead>
                    <tbody>
                       <!--  -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!--hidden-->

    <div id="dark">
        <div class="spaceWrapper">
            <div class="text_form">Выберите категорию:
                <select>
                    <option value="none">---</option>
                    <option value="first">Россия</option>
                    <option value="second">СССР</option>
                    <option value="third">Олимпиада 80</option>
                </select>
            </div>
            <button name="button_close" id="close">X</button>
            <div id="modal-table">
                <div class="table-wrap-hidden">
                    <table class="Russia">
                        <thead>
                            <tr>
                                <td><span>Название</span></td>
                                <td>S</td>
                                <td>M</td>
                                <td>L</td>
                                <td>XL</td>
                                <td>XXL</td>
                                <td>XXXL</td>
                                <td>к-во</td>
                                <td>цена</td>
                            </tr>
                        </thead>
                        <tbody class="hidden_table">
                            <tr class="hidden-row">
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr class="hidden-row">
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr class="hidden-row">
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <button name="row_add" id="add_row">+</button>
            <button name="button_add" id="future">Добавить</button>
        </div>
    </div>
