import { getPrimaryList } from "@/functions/generator/weapons/getPrimaryList";
import { getSecondaryList } from "@/functions/generator/weapons/getSecondaryList";
import { getMeleeList } from "@/functions/generator/weapons/getMeleeList";
import { randomListItem } from "./randomListItem";
import { Weapon } from "@/types/Generator";

export async function fetchWeapon(type: string = "", game: string = "") {
  const dataList = getWeaponList(type, game);

  const data: Weapon = randomListItem(dataList);

  return data;
}

function getWeaponList(type, game) {
  switch (type) {
    case "primary":
      return getPrimaryList(game);
    case "secondary":
      return getSecondaryList(game);
    case "melee":
      return getMeleeList(game);
    default:
      return {};
  }
}
