<style>

.quotabook{
    color: var(--click, #CAC0A8);
    text-align: center;

    font-size: 2.11vw;
    font-style: normal;
    font-weight: 800;
    line-height: normal;
    /* border: 1px red solid; */
}

.quoter_today{
    width: 100%;
    max-height: 16.93vw;
    
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 10px;
    align-self: stretch;
    /* border: 1px red solid; */
}

.quoter_today_box{
    display: flex;
    width: 26.45vw;
    max-height: 16.93vw;
    padding: 2.11vw;
    justify-content: center;
    align-items: center;
    border-radius: 1.32vw 1.32vw 0px 1.32vw;
    border: .26vw solid var(--click, #CAC0A8);
    
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
    font-size: 1.19vw;
    font-style: normal;
    font-weight: 400;
    line-height: 1.85vw;
    letter-spacing: 0.36px;

    overflow: hidden;
    text-overflow: ellipsis;
}

.quoter_today_picture{
    width: 14.8vw;
    height: 16.93vw;
    /* border: 1px red solid; */
}

.quoter_today_picture img{
    width: 14.8vw;
    height: 16.93vw;
}

.content{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 4.23vw;
    align-self: stretch;
    /* border: 1px red solid; */
}

.whole_block{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 1.05vw;
    align-self: stretch;
    /* border: 1px red solid; */
}

.topic_block{
    padding:0px 2.11vw;
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
    font-size: 1.58vw;
    font-style: normal;
    font-weight: 400;
    line-height: normal;

    /* border: 1px red solid; */
}

.block{
    display: flex;
    flex-direction: column;
    padding: 2.11vw 1.05vw;
    justify-content: center;
    align-items: flex-start;
    gap: 1.05vw;
    align-self: stretch;

    border-radius: 0.26vw;
    border: 0.26vw solid var(--click, #CAC0A8);

    /* border: 1px red solid; */
}

.block_column{
    display: flex;
    padding: 0px 2.11vw;
    justify-content: center;
    align-items: flex-start;
    gap: 1.05vw;
    align-self: stretch;
}

.block_column_each{
    display: flex;
    padding: 1.05vw 2.11vw;
    flex-direction: column;
    align-items: flex-start;
    gap: 1.58vw;
    flex: 1 0 0;
    align-self: stretch;

    /* border: 1px red solid; */
}

.block_column_topic{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-size: 1.19vw;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.block_column_list{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-size: .92vw;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    /* text-decoration-line: underline; */

    /* border: 1px red solid; */
}

.block_column_list_underline{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-size: .92vw;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-decoration-line: underline;

    /* border: 1px red solid; */
}

.block_column_list_each{
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));

    font-size: .92vw;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    /* border: 1px red solid; */
}

</style>




@extends('components.header')


@section('body')
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
            <div class="block">
                <div class="topic_block">
                    Quote โควต
                </div>
                <div class="block_column">
                    <div class="block_column_each">
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
                    <div class="block_column_each">
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
        <div class="whole_block">
            <div class="block">
                <div class="topic_block">
                    Book Shelf ชั้นวางหนังสือ
                </div>
                <div class="block_column">
                    <div class="block_column_each">
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
                    <div class="block_column_each">
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
        <div class="whole_block">
            <div class="block">
                <div class="topic_block">
                    Writing มุมขีดเขียน
                </div>
                <div class="block_column">
                    <div class="block_column_each">
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
                    <div class="block_column_each">
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
        <div class="whole_block">
            <div class="block">
                <div class="topic_block">
                    Manage Library จัดการห้องสมุด
                </div>
                <div class="block_column">
                    <div class="block_column_each">
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
                    <div class="block_column_each">
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