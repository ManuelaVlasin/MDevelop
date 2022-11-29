<div wire:ignore>
    <div class="dropdown-container">
        <div class="select-btn">
            <span class="btn-text">{{ $placeholder }}</span>
            <span class="arrow-dwn">
                    <i class="fa fa-solid fa-arrow-down"></i>
                </span>
        </div>

        <ul class="list-items">
            @foreach($options ?? [] as $id => $name)
                <li class="item" wire:click="selectOption({{$id}})">
                    <span class="checkbox">
                        <i class="fa fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">{{ $name }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<style>
    /* Google Fonts - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


    .dropdown-container{
        position: relative;
        max-width: 320px;
        width: 100%;
    }
    .select-btn{
        display: flex;
        height: 40px;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
        border-radius: 8px;
        cursor: pointer;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .select-btn .btn-text{
        font-size: 17px;
        font-weight: 400;
        color: #333;
        user-select: none;
    }
    .select-btn .arrow-dwn{
        display: flex;
        height: 21px;
        width: 21px;
        color: #fff;
        font-size: 14px;
        border-radius: 50%;
        background: #6e93f7;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }
    .select-btn.open .arrow-dwn{
        transform: rotate(-180deg);
    }
    .list-items{
        position: absolute;
        max-width: 320px;
        width: 100%;
        z-index: 1000;
        margin-top: 15px;
        border-radius: 8px;
        padding: 16px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        display: none;
    }
    .select-btn.open ~ .list-items{
        display: block;
    }
    .list-items .item{
        display: flex;
        align-items: center;
        list-style: none;
        height: 50px;
        cursor: pointer;
        transition: 0.3s;
        padding: 0 15px;
        border-radius: 8px;
    }
    .list-items .item:hover{
        background-color: #e7edfe;
    }
    .item .item-text{
        font-size: 16px;
        font-weight: 400;
        color: #333;
    }
    .item .checkbox{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 16px;
        width: 16px;
        border-radius: 4px;
        margin-right: 12px;
        border: 1.5px solid #c0c0c0;
        transition: all 0.3s ease-in-out;
    }
    .item.checked .checkbox{
        background-color: #4070f4;
        border-color: #4070f4;
    }
    .checkbox .check-icon{
        color: #fff;
        font-size: 11px;
        transform: scale(0);
        transition: all 0.2s ease-in-out;
    }
    .item.checked .check-icon{
        transform: scale(1);
    }
</style>

<script>
    $( "body" ).click(function( event ) {
        if($(event.target).closest('ul').length === 0 && $(event.target).closest('.select-btn').length === 0)
        {
            selectBtn.classList.remove("open");
        }
    });

    const selectBtn = document.querySelector(".select-btn"),
        items = document.querySelectorAll(".item");

    selectBtn.addEventListener("click", () => {
        selectBtn.classList.toggle("open");
    });

    items.forEach(item => {
        item.addEventListener("click", () => {
            item.classList.toggle("checked");
            let checked = document.querySelectorAll(".checked"),
                btnText = document.querySelector(".btn-text");

            if(checked && checked.length > 0){
                btnText.innerText = `${checked.length} {{ __('selectate') }}`;
            }else{
                btnText.innerText = '{{ $placeholder }}';
            }
        });
    });
</script>
