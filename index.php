<?php
$formList=[
    'question1'=>["m_id"=>"11",2=>3,'options'=>[["option_id"=>"1",5=>16,7=>18],["option_id"=>"2",5=>9,7=>10]]],
    'question2'=>["m_id"=>"22",2=>3,'options'=>[["option_id"=>"1",5=>26,7=>28],["option_id"=>"3",5=>6,7=>80]]]
];

$optionTimes=["11"=>["1"=>2,"2"=>4],"22"=>["1"=>3,"3"=>19]];


//将票数信息添加到投票信息当中
foreach ($formList as $questionId=>$questionInfo){

    $options=&$formList[$questionId]["options"];
    $questionNum=$formList[$questionId]["m_id"];
    $optionsVote=&$optionTimes[$questionNum];

    //总票数
    $optionAllVote=0;
    foreach ($optionsVote as $option=>$vote){
        $optionAllVote+=$vote;
    }


    foreach ( $options as $optionId=>$optionInfo){

        $option=&$options[$optionId];

        $optionNum= $option['option_id'];

        $vote=$optionsVote[$optionNum];
        $process=number_format($vote/$optionAllVote,2);

//        添加票数字段
        $option['poll']=$vote;
//        添加票数占比字段
        $option['process']=$process;
        //添加票数占比文本字段
        $option['process_text']=(string)($process*100)."%";



        unset($option);

    }
    unset($options);

}

print_r($formList);

