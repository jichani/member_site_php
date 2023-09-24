<?php
include 'inc_header.php';
?>

<main class="p-5 border rounded-5">
  <h1 class="text-center">회원 약관 및 개인정보 취급방침 동의</h1>
  <h4>회원 약관</h4>
  <textarea name="" id="" cols="30" rows="10"
    class="form-control">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, non optio eveniet deleniti veritatis dolore perferendis, reprehenderit ad eaque iure nesciunt debitis, obcaecati omnis velit ratione commodi rerum asperiores facere sint et provident recusandae. Qui, soluta vel, atque debitis autem voluptate molestias consequatur dolores voluptates nulla dignissimos excepturi quam. Dolorem provident distinctio nostrum saepe. Dolor, distinctio reprehenderit autem voluptatibus id quas voluptas voluptatum nemo eius odit eveniet ratione voluptate. Natus neque quaerat eius optio, iure consequuntur ratione facilis cupiditate dolorem aspernatur veritatis adipisci hic voluptates commodi libero! Fugit possimus hic illo. Quas blanditiis beatae, ad, autem ipsa fugit ex commodi ut sed distinctio quisquam inventore rerum modi! Illo delectus quisquam sint excepturi provident voluptas, ipsam vitae magni debitis, iusto rem velit eius? Culpa amet laboriosam ipsam aliquid, saepe alias, facilis velit non quaerat dolor accusamus commodi repellendus, sed unde dolores asperiores quisquam consequuntur. Doloribus, iusto. Doloribus nesciunt sunt assumenda adipisci quidem nostrum enim nulla, consequuntur itaque eius dolore? Architecto consequatur, vitae dicta alias accusamus doloremque tempora. Iure nulla tempora debitis similique voluptatum aut, ducimus quidem praesentium nihil, repudiandae iusto aliquid dolorum. Amet, nostrum iste officia sed praesentium temporibus voluptatibus ipsa ea facere delectus aliquam minus cumque neque repudiandae in deleniti dolore ullam? Neque tenetur quasi veritatis nemo perspiciatis in, fuga pariatur quod, placeat odit, dolore consequuntur qui ratione voluptatibus possimus sequi temporibus. Sapiente doloribus, reprehenderit illo cumque enim maxime labore aperiam nobis neque quos reiciendis possimus animi cupiditate est quam? Commodi, nam? Unde magnam quod veniam harum id? Aperiam voluptatibus, molestiae ea repudiandae quidem soluta deserunt earum consectetur atque officia unde, similique officiis consequatur animi commodi vitae ullam facere quod saepe excepturi dolore quam omnis. Quod nisi beatae doloremque, culpa debitis veniam rerum perferendis earum animi. Quidem quam perspiciatis culpa error distinctio reprehenderit ullam, consectetur dignissimos aperiam. Mollitia, unde dolorem.</textarea>

  <div class="form-check mt-2">
    <input class="form-check-input" type="checkbox" value="1" id="chk_member1">
    <label class="form-check-label" for="chk_member1">
      위 약관에 동의하시겠습니까?
    </label>
  </div>

  <h4 class="mt-3">개인정보 취급방침</h4>
  <textarea name="" id="" cols="30" rows="10"
    class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nulla nostrum dolorum qui similique temporibus non soluta numquam obcaecati mollitia, dignissimos doloremque rerum iure incidunt error sint labore fugiat hic dolore repellat eligendi ratione nisi dolorem! Eos libero quae distinctio debitis voluptatem sapiente repudiandae, accusamus dicta consectetur minus quam velit similique obcaecati consequuntur iste error vero quisquam corporis reprehenderit ipsam. Non maiores rerum voluptas at recusandae porro cupiditate aliquam laboriosam, laudantium necessitatibus et. Fugiat porro maiores ab exercitationem nulla voluptatum optio labore ratione aspernatur vero totam at, molestias assumenda doloribus accusantium adipisci molestiae ex? Nemo reiciendis cum aut sunt quia id quisquam, ex optio quae, animi aspernatur maxime exercitationem earum? Nulla commodi consequuntur, veniam eum earum itaque laboriosam excepturi tenetur id ex adipisci voluptas asperiores modi doloremque. Debitis molestias sequi officia natus, accusamus at modi totam explicabo. Nihil, corporis sit quos ea doloribus eos fuga autem commodi velit, quia perferendis, quaerat enim repellendus! Incidunt quae repellat dolore magnam, quos recusandae facilis aut amet, tempore molestias eligendi laudantium quaerat nemo inventore assumenda? Fugit, ipsam expedita nulla vero architecto id, labore animi officiis debitis dolor culpa eius numquam, omnis ex! Illum exercitationem sit ex nihil fuga reiciendis aspernatur. Cupiditate sunt veniam sint officiis perferendis voluptas nemo voluptate commodi neque optio incidunt eligendi saepe, harum atque labore aut iure, accusamus aliquid assumenda aspernatur? Itaque, reprehenderit consequuntur. Minima fugit, tempora eaque suscipit, quod quasi illum soluta possimus accusantium eius, nemo aperiam quaerat nam sunt odio consequatur ducimus consectetur aspernatur ut nisi distinctio nobis quae ex provident! Enim, minima cum. Voluptas cupiditate aperiam laboriosam sint voluptatibus voluptates sapiente, iste in commodi delectus aut. Numquam expedita illo quis, soluta odio amet earum quibusdam ratione repellat nostrum sunt perspiciatis impedit deserunt nesciunt aut deleniti est eaque dolores vel distinctio dolorum sed, unde pariatur molestiae? Suscipit, id provident?</textarea>

  <div class="form-check mt-2">
    <input class="form-check-input" type="checkbox" value="" id="chk_member2">
    <label class="form-check-label" for="chk_member2">
      위 개인정보 취급방침에 동의하시겠습니까?
    </label>
  </div>

  <div class="mt-4 d-flex justify-content-center gap-2">
    <button class="btn btn-primary w-50" id="btn_member">회원가입</button>
    <button class="btn btn-secondary w-50">가입취소</button>
  </div>

  <form action="member_input.php" method="post" name="stipulation_form" style="display:none">
    <input type="hidden" name="chk" value="0">
  </form>

</main>


<?php
include 'inc_footer.php';
?>

<!-- 17:25 -->