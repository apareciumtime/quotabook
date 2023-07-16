<style>


.playground{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 64px;
    align-self: stretch;
    padding:32px 128px;
    /* border: 1px red solid; */
}

.quotabook{
    color: var(--click, #CAC0A8);
    text-align: center;

    font-size: 32px;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
    /* border: 1px red solid; */
}

.quoter_today{
    width: 100%;
    height: 256px;
    /* border: 1px red solid; */

    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 10px;
    align-self: stretch;
}

.quoter_today_box{
    display: flex;
    width: 400px;
    padding: 32px;
    justify-content: center;
    align-items: center;
    border-radius: 20px 20px 0px 20px;
    border: 4px solid var(--click, #CAC0A8);
    
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 28px;
    letter-spacing: 0.36px;
}

.quoter_today_picture{
    width: 223.79px;
    height: 256px;
    /* border: 1px red solid; */
}

.quoter_today_picture img{
    width: 100%;
    height: 100%;
}

.content{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 64px;
    align-self: stretch;
    /* border: 1px red solid; */
}

.whole_block{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    align-self: stretch;
    /* border: 1px red solid; */
}

.topic_block{
    padding:0px 16px;
    color: var(--font-primary-black, #0E0E0E);
    font-size: 24px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;

    /* border: 1px red solid; */
}

.block{
    display: flex;
    padding: 32px;
    justify-content: center;
    align-items: flex-start;
    gap: 16px;
    align-self: stretch;

    border-radius: 4px;
    border: 4px solid var(--click, #CAC0A8);

    /* border: 1px red solid; */
}

.block_column{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    flex: 1 0 0;

    /* border: 1px red solid; */
}

.block_column_topic{
    color: var(--font-primary-black, #0E0E0E);

    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.block_column_list{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    /* text-decoration-line: underline; */

    /* border: 1px red solid; */
}

.block_column_list_underline{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-decoration-line: underline;

    /* border: 1px red solid; */
}

.block_column_list_each{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    /* border: 1px red solid; */
}

</style>




@extends('components.header')


@section('body')
<div class="playground">
    <div class="quotabook">
        QuotabooK
    </div>

    <div class="quoter_today">
        <div class="quoter_today_box">
            Bird by bird ค่อย ๆ เขียนถึงนกไปทีละตัว แล้ววันหนึ่งจะสำเร็จเอง ไม่ต้องรีบร้อน
        </div>
        <div class="quoter_today_picture">
            <img src="/image/quoter.png" alt="Image"/>
        </div>
    </div>
    <div class="content">
        <div class="whole_block">
            <div class="topic_block">
                Quote โควต
            </div>
            <div class="block">
                <div class="block_column">
                    <div class="block_column_topic">
                        วิธีการใช้งานเบื้องต้น
                    </div>
                    <div class="block_column_list">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        <div class="block_column_list_each">
                            2. 
                        </div>
                    </div>
                </div>

                <div class="block_column">
                    <div class="block_column_topic">
                        การใช้งานอื่น ๆ
                    </div>
                    <div class="block_column_list_underline">
                        <a href="#">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        </a>
                        <a href="#">
                        <div class="block_column_list_each">
                            2. 
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="whole_block">
            <div class="topic_block">
                Book Shelf ชั้นวางหนังสือ
            </div>
            <div class="block">
                <div class="block_column">
                    <div class="block_column_topic">
                        วิธีการใช้งานเบื้องต้น
                    </div>
                    <div class="block_column_list">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        <div class="block_column_list_each">
                            2. 
                        </div>
                    </div>
                </div>

                <div class="block_column">
                    <div class="block_column_topic">
                        การใช้งานอื่น ๆ
                    </div>
                    <div class="block_column_list_underline">
                        <a href="#">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        </a>
                        <a href="#">
                        <div class="block_column_list_each">
                            2. 
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="whole_block">
            <div class="topic_block">
                Writing มุมขีดเขียน
            </div>
            <div class="block">
                <div class="block_column">
                    <div class="block_column_topic">
                        วิธีการใช้งานเบื้องต้น
                    </div>
                    <div class="block_column_list">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        <div class="block_column_list_each">
                            2. 
                        </div>
                    </div>
                </div>

                <div class="block_column">
                    <div class="block_column_topic">
                        การใช้งานอื่น ๆ
                    </div>
                    <div class="block_column_list_underline">
                        <a href="#">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        </a>
                        <a href="#">
                        <div class="block_column_list_each">
                            2. 
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="whole_block">
            <div class="topic_block">
                Manage Library จัดการห้องสมุด
            </div>
            <div class="block">
                <div class="block_column">
                    <div class="block_column_topic">
                        วิธีการใช้งานเบื้องต้น
                    </div>
                    <div class="block_column_list">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        <div class="block_column_list_each">
                            2. 
                        </div>
                    </div>
                </div>

                <div class="block_column">
                    <div class="block_column_topic">
                        การใช้งานอื่น ๆ
                    </div>
                    <div class="block_column_list_underline">
                        <a href="#">
                        <div class="block_column_list_each">
                            1. 
                        </div>
                        </a>
                        <a href="#">
                        <div class="block_column_list_each">
                            2. 
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


</div>


@endsection